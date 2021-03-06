<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace SwoftTest\Aop\Testing;

use Swoft\Annotation\Contract\LoaderInterface;

/**
 * Class AutoLoader
 *
 * @since 2.0
 */
class AutoLoader implements LoaderInterface
{
    /**
     * Get namespace and dirs
     *
     * @return array
     */
    public function getPrefixDirs(): array
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }

    /**
     * Disable or enable this component.
     *
     * @return bool
     */
    public function isEnable(): bool
    {
        return true;
    }
}

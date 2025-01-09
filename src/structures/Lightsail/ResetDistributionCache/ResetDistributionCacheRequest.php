<?php

namespace Sunaoka\Aws\Structures\Lightsail\ResetDistributionCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionName
 */
class ResetDistributionCacheRequest extends Request
{
    /**
     * @param array{distributionName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

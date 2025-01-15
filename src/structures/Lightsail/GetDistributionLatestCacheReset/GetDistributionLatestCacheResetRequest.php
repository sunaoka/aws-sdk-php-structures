<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributionLatestCacheReset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $distributionName
 */
class GetDistributionLatestCacheResetRequest extends Request
{
    /**
     * @param array{distributionName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

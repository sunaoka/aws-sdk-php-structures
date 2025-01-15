<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $distributionName
 * @property string|null $pageToken
 */
class GetDistributionsRequest extends Request
{
    /**
     * @param array{
     *     distributionName?: string|null,
     *     pageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

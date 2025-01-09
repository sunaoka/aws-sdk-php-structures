<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionName
 * @property string $pageToken
 */
class GetDistributionsRequest extends Request
{
    /**
     * @param array{
     *     distributionName?: string,
     *     pageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

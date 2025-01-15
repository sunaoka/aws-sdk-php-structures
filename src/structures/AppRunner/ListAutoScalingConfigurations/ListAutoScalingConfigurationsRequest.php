<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListAutoScalingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AutoScalingConfigurationName
 * @property bool|null $LatestOnly
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAutoScalingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingConfigurationName?: string|null,
     *     LatestOnly?: bool|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListAutoScalingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingConfigurationName
 * @property bool $LatestOnly
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListAutoScalingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingConfigurationName?: string,
     *     LatestOnly?: bool,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

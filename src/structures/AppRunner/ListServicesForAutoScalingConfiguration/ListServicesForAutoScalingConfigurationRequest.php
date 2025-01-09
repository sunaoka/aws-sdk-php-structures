<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListServicesForAutoScalingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingConfigurationArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListServicesForAutoScalingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingConfigurationArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

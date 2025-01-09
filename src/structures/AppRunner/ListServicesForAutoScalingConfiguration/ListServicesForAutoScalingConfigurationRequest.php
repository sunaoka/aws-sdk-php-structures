<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListServicesForAutoScalingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingConfigurationArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListServicesForAutoScalingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingConfigurationArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

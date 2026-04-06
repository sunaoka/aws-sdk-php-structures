<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListServicesForAutoScalingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingConfigurationArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListServicesForAutoScalingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingConfigurationArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

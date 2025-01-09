<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectiveInstanceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<1, 5> $MaxResults
 * @property string $NextToken
 */
class DescribeEffectiveInstanceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int<1, 5>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

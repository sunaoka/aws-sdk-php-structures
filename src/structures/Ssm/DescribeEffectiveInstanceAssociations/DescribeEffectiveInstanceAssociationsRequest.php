<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectiveInstanceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeEffectiveInstanceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

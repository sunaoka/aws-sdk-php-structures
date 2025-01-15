<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectiveInstanceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<1, 5>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeEffectiveInstanceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int<1, 5>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

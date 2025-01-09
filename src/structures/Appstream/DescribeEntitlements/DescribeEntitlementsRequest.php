<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeEntitlements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $StackName
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeEntitlementsRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     StackName: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

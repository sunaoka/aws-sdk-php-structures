<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeEntitlements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string $StackName
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class DescribeEntitlementsRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     StackName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

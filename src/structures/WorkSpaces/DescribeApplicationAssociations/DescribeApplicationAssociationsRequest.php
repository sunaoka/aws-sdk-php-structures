<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeApplicationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25> $MaxResults
 * @property string $NextToken
 * @property string $ApplicationId
 * @property list<'WORKSPACE'|'BUNDLE'|'IMAGE'> $AssociatedResourceTypes
 */
class DescribeApplicationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 25>,
     *     NextToken?: string,
     *     ApplicationId: string,
     *     AssociatedResourceTypes: list<'WORKSPACE'|'BUNDLE'|'IMAGE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

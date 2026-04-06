<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeApplicationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25>|null $MaxResults
 * @property string|null $NextToken
 * @property string $ApplicationId
 * @property list<'WORKSPACE'|'BUNDLE'|'IMAGE'> $AssociatedResourceTypes
 */
class DescribeApplicationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 25>|null,
     *     NextToken?: string|null,
     *     ApplicationId: string,
     *     AssociatedResourceTypes: list<'WORKSPACE'|'BUNDLE'|'IMAGE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

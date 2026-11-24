<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapmirrorRelationships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $SnapmirrorRelationshipIds
 * @property list<Shapes\SnapmirrorRelationshipFilter>|null $Filters
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeSnapmirrorRelationshipsRequest extends Request
{
    /**
     * @param array{
     *     SnapmirrorRelationshipIds?: list<string>|null,
     *     Filters?: list<Shapes\SnapmirrorRelationshipFilter>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

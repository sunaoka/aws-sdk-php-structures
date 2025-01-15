<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property list<Shapes\ObjectAttributeRange>|null $RangesOnIndexedValues
 * @property Shapes\ObjectReference $IndexReference
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 * @property 'SERIALIZABLE'|'EVENTUAL'|null $ConsistencyLevel
 */
class ListIndexRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     RangesOnIndexedValues?: list<Shapes\ObjectAttributeRange>|null,
     *     IndexReference: Shapes\ObjectReference,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

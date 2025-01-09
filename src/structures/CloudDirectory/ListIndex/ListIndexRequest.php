<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property list<Shapes\ObjectAttributeRange> $RangesOnIndexedValues
 * @property Shapes\ObjectReference $IndexReference
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 * @property 'SERIALIZABLE'|'EVENTUAL' $ConsistencyLevel
 */
class ListIndexRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     RangesOnIndexedValues?: list<Shapes\ObjectAttributeRange>,
     *     IndexReference: Shapes\ObjectReference,
     *     MaxResults?: int<1, max>,
     *     NextToken?: string,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

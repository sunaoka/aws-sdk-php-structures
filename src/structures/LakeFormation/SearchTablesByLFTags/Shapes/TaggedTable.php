<?php

namespace Sunaoka\Aws\Structures\LakeFormation\SearchTablesByLFTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableResource $Table
 * @property list<LFTagPair> $LFTagOnDatabase
 * @property list<LFTagPair> $LFTagsOnTable
 * @property list<ColumnLFTag> $LFTagsOnColumns
 */
class TaggedTable extends Shape
{
    /**
     * @param array{
     *     Table?: TableResource,
     *     LFTagOnDatabase?: list<LFTagPair>,
     *     LFTagsOnTable?: list<LFTagPair>,
     *     LFTagsOnColumns?: list<ColumnLFTag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

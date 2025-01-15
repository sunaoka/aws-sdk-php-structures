<?php

namespace Sunaoka\Aws\Structures\LakeFormation\SearchTablesByLFTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableResource|null $Table
 * @property list<LFTagPair>|null $LFTagOnDatabase
 * @property list<LFTagPair>|null $LFTagsOnTable
 * @property list<ColumnLFTag>|null $LFTagsOnColumns
 */
class TaggedTable extends Shape
{
    /**
     * @param array{
     *     Table?: TableResource|null,
     *     LFTagOnDatabase?: list<LFTagPair>|null,
     *     LFTagsOnTable?: list<LFTagPair>|null,
     *     LFTagsOnColumns?: list<ColumnLFTag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

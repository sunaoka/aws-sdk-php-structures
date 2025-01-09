<?php

namespace Sunaoka\Aws\Structures\LakeFormation\SearchTablesByLFTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<LFTagPair> $LFTags
 */
class ColumnLFTag extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     LFTags?: list<LFTagPair>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetResourceLFTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<LFTagPair>|null $LFTags
 */
class ColumnLFTag extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     LFTags?: list<LFTagPair>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

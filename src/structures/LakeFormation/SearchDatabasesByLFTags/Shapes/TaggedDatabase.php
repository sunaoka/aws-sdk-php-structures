<?php

namespace Sunaoka\Aws\Structures\LakeFormation\SearchDatabasesByLFTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DatabaseResource|null $Database
 * @property list<LFTagPair>|null $LFTags
 */
class TaggedDatabase extends Shape
{
    /**
     * @param array{
     *     Database?: DatabaseResource|null,
     *     LFTags?: list<LFTagPair>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

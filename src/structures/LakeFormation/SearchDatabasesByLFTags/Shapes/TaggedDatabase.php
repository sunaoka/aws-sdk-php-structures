<?php

namespace Sunaoka\Aws\Structures\LakeFormation\SearchDatabasesByLFTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DatabaseResource $Database
 * @property list<LFTagPair> $LFTags
 */
class TaggedDatabase extends Shape
{
    /**
     * @param array{
     *     Database?: DatabaseResource,
     *     LFTags?: list<LFTagPair>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

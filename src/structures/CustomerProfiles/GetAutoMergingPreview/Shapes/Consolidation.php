<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetAutoMergingPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<string>> $MatchingAttributesList
 */
class Consolidation extends Shape
{
    /**
     * @param array{MatchingAttributesList: list<list<string>>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

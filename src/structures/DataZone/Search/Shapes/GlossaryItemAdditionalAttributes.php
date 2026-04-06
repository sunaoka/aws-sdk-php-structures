<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MatchRationaleItem>|null $matchRationale
 */
class GlossaryItemAdditionalAttributes extends Shape
{
    /**
     * @param array{matchRationale?: list<MatchRationaleItem>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

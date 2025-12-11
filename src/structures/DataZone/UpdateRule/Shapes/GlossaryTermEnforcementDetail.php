<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $requiredGlossaryTermIds
 */
class GlossaryTermEnforcementDetail extends Shape
{
    /**
     * @param array{requiredGlossaryTermIds?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

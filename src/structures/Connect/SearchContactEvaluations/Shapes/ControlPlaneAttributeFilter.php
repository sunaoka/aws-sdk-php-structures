<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CommonAttributeAndCondition>|null $OrConditions
 * @property CommonAttributeAndCondition|null $AndCondition
 * @property TagCondition|null $TagCondition
 */
class ControlPlaneAttributeFilter extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<CommonAttributeAndCondition>|null,
     *     AndCondition?: CommonAttributeAndCondition|null,
     *     TagCondition?: TagCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

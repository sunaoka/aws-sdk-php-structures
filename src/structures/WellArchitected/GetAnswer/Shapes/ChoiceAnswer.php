<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChoiceId
 * @property 'SELECTED'|'NOT_APPLICABLE'|'UNSELECTED'|null $Status
 * @property 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'|null $Reason
 * @property string|null $Notes
 */
class ChoiceAnswer extends Shape
{
    /**
     * @param array{
     *     ChoiceId?: string|null,
     *     Status?: 'SELECTED'|'NOT_APPLICABLE'|'UNSELECTED'|null,
     *     Reason?: 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'|null,
     *     Notes?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

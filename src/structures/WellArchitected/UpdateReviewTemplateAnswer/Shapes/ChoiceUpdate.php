<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateReviewTemplateAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SELECTED'|'NOT_APPLICABLE'|'UNSELECTED' $Status
 * @property 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE' $Reason
 * @property string $Notes
 */
class ChoiceUpdate extends Shape
{
    /**
     * @param array{
     *     Status: 'SELECTED'|'NOT_APPLICABLE'|'UNSELECTED',
     *     Reason?: 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE',
     *     Notes?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

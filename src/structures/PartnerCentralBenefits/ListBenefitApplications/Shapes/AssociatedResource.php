<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\ListBenefitApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPPORTUNITY'|'BENEFIT_ALLOCATION'|null $ResourceType
 * @property string|null $ResourceIdentifier
 * @property string|null $ResourceArn
 */
class AssociatedResource extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'OPPORTUNITY'|'BENEFIT_ALLOCATION'|null,
     *     ResourceIdentifier?: string|null,
     *     ResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

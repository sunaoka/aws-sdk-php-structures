<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\AmendBenefitApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldPath
 * @property string $NewValue
 */
class Amendment extends Shape
{
    /**
     * @param array{
     *     FieldPath: string,
     *     NewValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

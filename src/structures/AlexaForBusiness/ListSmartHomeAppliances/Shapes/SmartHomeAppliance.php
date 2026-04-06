<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSmartHomeAppliances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FriendlyName
 * @property string|null $Description
 * @property string|null $ManufacturerName
 */
class SmartHomeAppliance extends Shape
{
    /**
     * @param array{
     *     FriendlyName?: string|null,
     *     Description?: string|null,
     *     ManufacturerName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

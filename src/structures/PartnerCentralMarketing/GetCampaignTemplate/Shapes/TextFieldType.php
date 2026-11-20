<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $MinLength
 * @property int<1, max>|null $MaxLength
 * @property string|null $Pattern
 * @property string|null $Placeholder
 */
class TextFieldType extends Shape
{
    /**
     * @param array{
     *     MinLength?: int<0, max>|null,
     *     MaxLength?: int<1, max>|null,
     *     Pattern?: string|null,
     *     Placeholder?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $MaxLength
 * @property list<string> $AllowedTags
 * @property string|null $Placeholder
 */
class RichTextFieldType extends Shape
{
    /**
     * @param array{
     *     MaxLength?: int<1, max>|null,
     *     AllowedTags: list<string>,
     *     Placeholder?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

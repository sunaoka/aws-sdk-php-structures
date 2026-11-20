<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextFieldType|null $Text
 * @property RichTextFieldType|null $RichText
 * @property ImageFieldType|null $Image
 * @property AssetLinkFieldType|null $AssetLink
 */
class FieldType extends Shape
{
    /**
     * @param array{
     *     Text?: TextFieldType|null,
     *     RichText?: RichTextFieldType|null,
     *     Image?: ImageFieldType|null,
     *     AssetLink?: AssetLinkFieldType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

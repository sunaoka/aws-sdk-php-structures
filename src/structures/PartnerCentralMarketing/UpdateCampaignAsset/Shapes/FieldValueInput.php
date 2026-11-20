<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\UpdateCampaignAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property TemplateFieldValue|null $Value
 */
class FieldValueInput extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Value?: TemplateFieldValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

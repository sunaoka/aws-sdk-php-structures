<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\BatchCreateCampaignAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property string|null $Label
 * @property list<string> $FieldIds
 * @property list<LayoutPreview>|null $LayoutPreviews
 */
class CampaignAssetLayoutOption extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     Label?: string|null,
     *     FieldIds: list<string>,
     *     LayoutPreviews?: list<LayoutPreview>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

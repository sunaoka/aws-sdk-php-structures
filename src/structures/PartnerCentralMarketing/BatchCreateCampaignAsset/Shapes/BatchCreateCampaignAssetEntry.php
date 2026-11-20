<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\BatchCreateCampaignAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceAssetTemplateIdentifier
 */
class BatchCreateCampaignAssetEntry extends Shape
{
    /**
     * @param array{SourceAssetTemplateIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

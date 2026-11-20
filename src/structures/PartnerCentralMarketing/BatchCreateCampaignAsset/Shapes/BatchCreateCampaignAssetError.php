<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\BatchCreateCampaignAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceAssetTemplateId
 * @property string $Code
 * @property string $Message
 */
class BatchCreateCampaignAssetError extends Shape
{
    /**
     * @param array{
     *     SourceAssetTemplateId: string,
     *     Code: string,
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

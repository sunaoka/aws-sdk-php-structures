<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAssetExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXPORT_TIMEOUT'|'EXPORT_TOO_LARGE'|'PACKAGING_ERROR'|'SOURCE_OBJECT_MISSING'|'INTERNAL_ERROR' $Code
 * @property string $Message
 */
class CampaignAssetExportFailureReason extends Shape
{
    /**
     * @param array{
     *     Code: 'EXPORT_TIMEOUT'|'EXPORT_TOO_LARGE'|'PACKAGING_ERROR'|'SOURCE_OBJECT_MISSING'|'INTERNAL_ERROR',
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HTML'|'PDF'|'IMAGE' $Format
 * @property string $Url
 * @property 'FORM'|'CONFIRMATION'|null $PageType
 */
class LayoutPreview extends Shape
{
    /**
     * @param array{
     *     Format: 'HTML'|'PDF'|'IMAGE',
     *     Url: string,
     *     PageType?: 'FORM'|'CONFIRMATION'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

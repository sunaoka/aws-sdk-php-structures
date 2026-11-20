<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\ListCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAME'|'STATE'|'START_ON'|'CREATED_AT' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class CampaignSort extends Shape
{
    /**
     * @param array{
     *     SortBy: 'NAME'|'STATE'|'START_ON'|'CREATED_AT',
     *     SortOrder: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

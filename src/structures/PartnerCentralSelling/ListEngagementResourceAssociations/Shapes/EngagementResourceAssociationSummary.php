<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementResourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Catalog
 * @property string $CreatedBy
 * @property string $EngagementId
 * @property string $ResourceId
 * @property 'Opportunity' $ResourceType
 */
class EngagementResourceAssociationSummary extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     CreatedBy?: string,
     *     EngagementId?: string,
     *     ResourceId?: string,
     *     ResourceType?: 'Opportunity'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

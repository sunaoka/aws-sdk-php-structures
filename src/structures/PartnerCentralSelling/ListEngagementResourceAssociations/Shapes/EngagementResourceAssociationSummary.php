<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementResourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Catalog
 * @property string|null $EngagementId
 * @property 'Opportunity'|null $ResourceType
 * @property string|null $ResourceId
 * @property string|null $CreatedBy
 */
class EngagementResourceAssociationSummary extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementId?: string|null,
     *     ResourceType?: 'Opportunity'|null,
     *     ResourceId?: string|null,
     *     CreatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

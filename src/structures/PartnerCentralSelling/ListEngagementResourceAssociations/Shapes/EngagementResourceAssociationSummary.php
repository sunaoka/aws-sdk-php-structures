<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementResourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Catalog
 * @property string|null $CreatedBy
 * @property string|null $EngagementId
 * @property string|null $ResourceId
 * @property 'Opportunity'|null $ResourceType
 */
class EngagementResourceAssociationSummary extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     CreatedBy?: string|null,
     *     EngagementId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: 'Opportunity'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

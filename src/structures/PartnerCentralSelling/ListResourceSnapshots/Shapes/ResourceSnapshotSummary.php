<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property int<1, max>|null $Revision
 * @property 'Opportunity'|null $ResourceType
 * @property string|null $ResourceId
 * @property string|null $ResourceSnapshotTemplateName
 * @property string|null $CreatedBy
 */
class ResourceSnapshotSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Revision?: int<1, max>|null,
     *     ResourceType?: 'Opportunity'|null,
     *     ResourceId?: string|null,
     *     ResourceSnapshotTemplateName?: string|null,
     *     CreatedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

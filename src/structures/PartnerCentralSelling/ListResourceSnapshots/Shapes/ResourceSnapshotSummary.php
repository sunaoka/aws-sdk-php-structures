<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CreatedBy
 * @property string|null $ResourceId
 * @property string|null $ResourceSnapshotTemplateName
 * @property 'Opportunity'|null $ResourceType
 * @property int<1, max>|null $Revision
 */
class ResourceSnapshotSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreatedBy?: string|null,
     *     ResourceId?: string|null,
     *     ResourceSnapshotTemplateName?: string|null,
     *     ResourceType?: 'Opportunity'|null,
     *     Revision?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CreatedBy
 * @property string $ResourceId
 * @property string $ResourceSnapshotTemplateName
 * @property 'Opportunity' $ResourceType
 * @property int $Revision
 */
class ResourceSnapshotSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreatedBy?: string,
     *     ResourceId?: string,
     *     ResourceSnapshotTemplateName?: string,
     *     ResourceType?: 'Opportunity',
     *     Revision?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

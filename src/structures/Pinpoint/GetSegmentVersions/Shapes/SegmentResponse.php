<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreationDate
 * @property SegmentDimensions|null $Dimensions
 * @property string $Id
 * @property SegmentImportResource|null $ImportDefinition
 * @property string|null $LastModifiedDate
 * @property string|null $Name
 * @property SegmentGroupList|null $SegmentGroups
 * @property 'DIMENSIONAL'|'IMPORT' $SegmentType
 * @property array<string, string>|null $tags
 * @property int|null $Version
 */
class SegmentResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Arn: string,
     *     CreationDate: string,
     *     Dimensions?: SegmentDimensions|null,
     *     Id: string,
     *     ImportDefinition?: SegmentImportResource|null,
     *     LastModifiedDate?: string|null,
     *     Name?: string|null,
     *     SegmentGroups?: SegmentGroupList|null,
     *     SegmentType: 'DIMENSIONAL'|'IMPORT',
     *     tags?: array<string, string>|null,
     *     Version?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

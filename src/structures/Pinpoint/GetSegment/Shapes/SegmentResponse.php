<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreationDate
 * @property SegmentDimensions $Dimensions
 * @property string $Id
 * @property SegmentImportResource $ImportDefinition
 * @property string $LastModifiedDate
 * @property string $Name
 * @property SegmentGroupList $SegmentGroups
 * @property 'DIMENSIONAL'|'IMPORT' $SegmentType
 * @property array<string, string> $tags
 * @property int $Version
 */
class SegmentResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Arn: string,
     *     CreationDate: string,
     *     Dimensions?: SegmentDimensions,
     *     Id: string,
     *     ImportDefinition?: SegmentImportResource,
     *     LastModifiedDate?: string,
     *     Name?: string,
     *     SegmentGroups?: SegmentGroupList,
     *     SegmentType: 'DIMENSIONAL'|'IMPORT',
     *     tags?: array<string, string>,
     *     Version?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

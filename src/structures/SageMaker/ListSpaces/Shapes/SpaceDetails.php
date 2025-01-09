<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainId
 * @property string $SpaceName
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property SpaceSettingsSummary $SpaceSettingsSummary
 * @property SpaceSharingSettingsSummary $SpaceSharingSettingsSummary
 * @property OwnershipSettingsSummary $OwnershipSettingsSummary
 * @property string $SpaceDisplayName
 */
class SpaceDetails extends Shape
{
    /**
     * @param array{
     *     DomainId?: string,
     *     SpaceName?: string,
     *     Status?: 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     SpaceSettingsSummary?: SpaceSettingsSummary,
     *     SpaceSharingSettingsSummary?: SpaceSharingSettingsSummary,
     *     OwnershipSettingsSummary?: OwnershipSettingsSummary,
     *     SpaceDisplayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

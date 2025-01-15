<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainId
 * @property string|null $SpaceName
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property SpaceSettingsSummary|null $SpaceSettingsSummary
 * @property SpaceSharingSettingsSummary|null $SpaceSharingSettingsSummary
 * @property OwnershipSettingsSummary|null $OwnershipSettingsSummary
 * @property string|null $SpaceDisplayName
 */
class SpaceDetails extends Shape
{
    /**
     * @param array{
     *     DomainId?: string|null,
     *     SpaceName?: string|null,
     *     Status?: 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     SpaceSettingsSummary?: SpaceSettingsSummary|null,
     *     SpaceSharingSettingsSummary?: SpaceSharingSettingsSummary|null,
     *     OwnershipSettingsSummary?: OwnershipSettingsSummary|null,
     *     SpaceDisplayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

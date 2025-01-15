<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListUserProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainId
 * @property string|null $UserProfileName
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class UserProfileDetails extends Shape
{
    /**
     * @param array{
     *     DomainId?: string|null,
     *     UserProfileName?: string|null,
     *     Status?: 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

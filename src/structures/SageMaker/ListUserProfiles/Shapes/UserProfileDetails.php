<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListUserProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainId
 * @property string $UserProfileName
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class UserProfileDetails extends Shape
{
    /**
     * @param array{
     *     DomainId?: string,
     *     UserProfileName?: string,
     *     Status?: 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

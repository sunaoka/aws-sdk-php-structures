<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\UndeploySystemInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property 'NOT_DEPLOYED'|'BOOTSTRAP'|'DEPLOY_IN_PROGRESS'|'DEPLOYED_IN_TARGET'|'UNDEPLOY_IN_PROGRESS'|'FAILED'|'PENDING_DELETE'|'DELETED_IN_TARGET' $status
 * @property 'GREENGRASS'|'CLOUD' $target
 * @property string $greengrassGroupName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $greengrassGroupId
 * @property string $greengrassGroupVersionId
 */
class SystemInstanceSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     status?: 'NOT_DEPLOYED'|'BOOTSTRAP'|'DEPLOY_IN_PROGRESS'|'DEPLOYED_IN_TARGET'|'UNDEPLOY_IN_PROGRESS'|'FAILED'|'PENDING_DELETE'|'DELETED_IN_TARGET',
     *     target?: 'GREENGRASS'|'CLOUD',
     *     greengrassGroupName?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     greengrassGroupId?: string,
     *     greengrassGroupVersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

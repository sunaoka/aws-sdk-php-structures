<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeploySystemInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property 'NOT_DEPLOYED'|'BOOTSTRAP'|'DEPLOY_IN_PROGRESS'|'DEPLOYED_IN_TARGET'|'UNDEPLOY_IN_PROGRESS'|'FAILED'|'PENDING_DELETE'|'DELETED_IN_TARGET'|null $status
 * @property 'GREENGRASS'|'CLOUD'|null $target
 * @property string|null $greengrassGroupName
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $greengrassGroupId
 * @property string|null $greengrassGroupVersionId
 */
class SystemInstanceSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     status?: 'NOT_DEPLOYED'|'BOOTSTRAP'|'DEPLOY_IN_PROGRESS'|'DEPLOYED_IN_TARGET'|'UNDEPLOY_IN_PROGRESS'|'FAILED'|'PENDING_DELETE'|'DELETED_IN_TARGET'|null,
     *     target?: 'GREENGRASS'|'CLOUD'|null,
     *     greengrassGroupName?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     greengrassGroupId?: string|null,
     *     greengrassGroupVersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

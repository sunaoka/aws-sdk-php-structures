<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMlflowApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Deleted'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $MlflowVersion
 */
class MlflowAppSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Status?: 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Deleted'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     MlflowVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

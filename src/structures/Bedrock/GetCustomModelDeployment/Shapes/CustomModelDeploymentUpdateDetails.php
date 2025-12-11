<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModelDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property 'Updating'|'UpdateCompleted'|'UpdateFailed' $updateStatus
 */
class CustomModelDeploymentUpdateDetails extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     updateStatus: 'Updating'|'UpdateCompleted'|'UpdateFailed'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterExtensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExtensionArn
 * @property string $ExtensionName
 * @property string $ExtensionVersion
 * @property 'Creating'|'Active'|'CreateFailed'|'Updating'|'Deleting'|'DeleteFailed'|'Degraded'|'UpdateFailed' $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class ExtensionSummary extends Shape
{
    /**
     * @param array{
     *     ExtensionArn: string,
     *     ExtensionName: string,
     *     ExtensionVersion: string,
     *     Status: 'Creating'|'Active'|'CreateFailed'|'Updating'|'Deleting'|'DeleteFailed'|'Degraded'|'UpdateFailed',
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

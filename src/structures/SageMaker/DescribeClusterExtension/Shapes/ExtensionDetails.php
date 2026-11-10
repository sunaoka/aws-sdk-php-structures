<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterExtension\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterArn
 * @property string $ExtensionArn
 * @property string $ExtensionName
 * @property string $ExtensionVersion
 * @property 'Creating'|'Active'|'CreateFailed'|'Updating'|'Deleting'|'DeleteFailed'|'Degraded'|'UpdateFailed' $Status
 * @property string|null $ConfigurationValues
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class ExtensionDetails extends Shape
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     ExtensionArn: string,
     *     ExtensionName: string,
     *     ExtensionVersion: string,
     *     Status: 'Creating'|'Active'|'CreateFailed'|'Updating'|'Deleting'|'DeleteFailed'|'Degraded'|'UpdateFailed',
     *     ConfigurationValues?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

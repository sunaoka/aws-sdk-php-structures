<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCloudFormationStackRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ExportSnapshotRecord'|null $resourceType
 * @property string|null $name
 * @property string|null $arn
 */
class CloudFormationStackRecordSourceInfo extends Shape
{
    /**
     * @param array{
     *     resourceType?: 'ExportSnapshotRecord'|null,
     *     name?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

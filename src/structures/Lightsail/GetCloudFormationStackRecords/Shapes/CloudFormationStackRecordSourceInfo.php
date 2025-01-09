<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCloudFormationStackRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ExportSnapshotRecord' $resourceType
 * @property string $name
 * @property string $arn
 */
class CloudFormationStackRecordSourceInfo extends Shape
{
    /**
     * @param array{
     *     resourceType?: 'ExportSnapshotRecord',
     *     name?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

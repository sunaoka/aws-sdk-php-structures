<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelDiagnosticsS3OutputConfiguration $S3OutputConfiguration
 * @property string|null $KmsKeyId
 */
class ModelDiagnosticsOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     S3OutputConfiguration: ModelDiagnosticsS3OutputConfiguration,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

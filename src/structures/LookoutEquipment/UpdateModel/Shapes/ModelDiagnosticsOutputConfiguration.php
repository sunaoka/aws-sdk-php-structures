<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelDiagnosticsS3OutputConfiguration $S3OutputConfiguration
 * @property string $KmsKeyId
 */
class ModelDiagnosticsOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     S3OutputConfiguration: ModelDiagnosticsS3OutputConfiguration,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

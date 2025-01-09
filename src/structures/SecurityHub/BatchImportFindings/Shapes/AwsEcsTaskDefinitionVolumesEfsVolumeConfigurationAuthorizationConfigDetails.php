<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessPointId
 * @property string $Iam
 */
class AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationAuthorizationConfigDetails extends Shape
{
    /**
     * @param array{
     *     AccessPointId?: string,
     *     Iam?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

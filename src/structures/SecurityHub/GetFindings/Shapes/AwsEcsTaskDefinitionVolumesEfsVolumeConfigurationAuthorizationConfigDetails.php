<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessPointId
 * @property string|null $Iam
 */
class AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationAuthorizationConfigDetails extends Shape
{
    /**
     * @param array{
     *     AccessPointId?: string|null,
     *     Iam?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

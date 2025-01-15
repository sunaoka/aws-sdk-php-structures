<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerPath
 * @property bool|null $ReadOnly
 * @property string|null $SourceVolume
 */
class AwsEcsTaskDefinitionContainerDefinitionsMountPointsDetails extends Shape
{
    /**
     * @param array{
     *     ContainerPath?: string|null,
     *     ReadOnly?: bool|null,
     *     SourceVolume?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

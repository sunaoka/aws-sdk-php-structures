<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerPath
 * @property bool $ReadOnly
 * @property string $SourceVolume
 */
class AwsEcsTaskDefinitionContainerDefinitionsMountPointsDetails extends Shape
{
    /**
     * @param array{
     *     ContainerPath?: string,
     *     ReadOnly?: bool,
     *     SourceVolume?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

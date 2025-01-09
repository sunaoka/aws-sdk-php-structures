<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ContainerPort
 * @property int $HostPort
 * @property string $Protocol
 */
class AwsEcsTaskDefinitionContainerDefinitionsPortMappingsDetails extends Shape
{
    /**
     * @param array{
     *     ContainerPort?: int,
     *     HostPort?: int,
     *     Protocol?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

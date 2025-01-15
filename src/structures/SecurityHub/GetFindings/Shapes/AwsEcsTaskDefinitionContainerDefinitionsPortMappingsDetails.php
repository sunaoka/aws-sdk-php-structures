<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ContainerPort
 * @property int|null $HostPort
 * @property string|null $Protocol
 */
class AwsEcsTaskDefinitionContainerDefinitionsPortMappingsDetails extends Shape
{
    /**
     * @param array{
     *     ContainerPort?: int|null,
     *     HostPort?: int|null,
     *     Protocol?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

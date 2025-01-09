<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerName
 * @property int $ContainerPort
 * @property int $Port
 * @property string $RegistryArn
 */
class AwsEcsServiceServiceRegistriesDetails extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string,
     *     ContainerPort?: int,
     *     Port?: int,
     *     RegistryArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

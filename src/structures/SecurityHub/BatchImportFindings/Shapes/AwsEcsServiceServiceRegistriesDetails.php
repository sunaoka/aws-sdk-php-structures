<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerName
 * @property int|null $ContainerPort
 * @property int|null $Port
 * @property string|null $RegistryArn
 */
class AwsEcsServiceServiceRegistriesDetails extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string|null,
     *     ContainerPort?: int|null,
     *     Port?: int|null,
     *     RegistryArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

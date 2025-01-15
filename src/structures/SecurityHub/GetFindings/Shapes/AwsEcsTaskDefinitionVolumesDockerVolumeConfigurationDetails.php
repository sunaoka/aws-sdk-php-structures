<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Autoprovision
 * @property string|null $Driver
 * @property array<string, string>|null $DriverOpts
 * @property array<string, string>|null $Labels
 * @property string|null $Scope
 */
class AwsEcsTaskDefinitionVolumesDockerVolumeConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     Autoprovision?: bool|null,
     *     Driver?: string|null,
     *     DriverOpts?: array<string, string>|null,
     *     Labels?: array<string, string>|null,
     *     Scope?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

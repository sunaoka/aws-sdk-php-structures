<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Autoprovision
 * @property string $Driver
 * @property array<string, string> $DriverOpts
 * @property array<string, string> $Labels
 * @property string $Scope
 */
class AwsEcsTaskDefinitionVolumesDockerVolumeConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     Autoprovision?: bool,
     *     Driver?: string,
     *     DriverOpts?: array<string, string>,
     *     Labels?: array<string, string>,
     *     Scope?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

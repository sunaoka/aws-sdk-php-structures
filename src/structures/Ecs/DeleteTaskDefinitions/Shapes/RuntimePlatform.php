<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'X86_64'|'ARM64' $cpuArchitecture
 * @property 'WINDOWS_SERVER_2019_FULL'|'WINDOWS_SERVER_2019_CORE'|'WINDOWS_SERVER_2016_FULL'|'WINDOWS_SERVER_2004_CORE'|'WINDOWS_SERVER_2022_CORE'|'WINDOWS_SERVER_2022_FULL'|'WINDOWS_SERVER_20H2_CORE'|'LINUX' $operatingSystemFamily
 */
class RuntimePlatform extends Shape
{
    /**
     * @param array{
     *     cpuArchitecture?: 'X86_64'|'ARM64',
     *     operatingSystemFamily?: 'WINDOWS_SERVER_2019_FULL'|'WINDOWS_SERVER_2019_CORE'|'WINDOWS_SERVER_2016_FULL'|'WINDOWS_SERVER_2004_CORE'|'WINDOWS_SERVER_2022_CORE'|'WINDOWS_SERVER_2022_FULL'|'WINDOWS_SERVER_20H2_CORE'|'LINUX'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

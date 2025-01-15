<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'X86_64'|'ARM64'|null $cpuArchitecture
 * @property 'WINDOWS_SERVER_2019_FULL'|'WINDOWS_SERVER_2019_CORE'|'WINDOWS_SERVER_2016_FULL'|'WINDOWS_SERVER_2004_CORE'|'WINDOWS_SERVER_2022_CORE'|'WINDOWS_SERVER_2022_FULL'|'WINDOWS_SERVER_20H2_CORE'|'LINUX'|null $operatingSystemFamily
 */
class RuntimePlatform extends Shape
{
    /**
     * @param array{
     *     cpuArchitecture?: 'X86_64'|'ARM64'|null,
     *     operatingSystemFamily?: 'WINDOWS_SERVER_2019_FULL'|'WINDOWS_SERVER_2019_CORE'|'WINDOWS_SERVER_2016_FULL'|'WINDOWS_SERVER_2004_CORE'|'WINDOWS_SERVER_2022_CORE'|'WINDOWS_SERVER_2022_FULL'|'WINDOWS_SERVER_20H2_CORE'|'LINUX'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

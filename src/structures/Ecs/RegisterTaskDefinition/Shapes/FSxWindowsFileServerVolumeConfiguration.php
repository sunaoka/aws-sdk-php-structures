<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileSystemId
 * @property string $rootDirectory
 * @property FSxWindowsFileServerAuthorizationConfig $authorizationConfig
 */
class FSxWindowsFileServerVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     fileSystemId: string,
     *     rootDirectory: string,
     *     authorizationConfig: FSxWindowsFileServerAuthorizationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

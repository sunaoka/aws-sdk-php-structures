<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImportedImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $DisplayName
 * @property string $AbsoluteAppPath
 * @property string|null $AbsoluteIconPath
 * @property string|null $AbsoluteManifestPath
 * @property string|null $WorkingDirectory
 * @property string|null $LaunchParameters
 */
class ApplicationConfig extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     DisplayName?: string|null,
     *     AbsoluteAppPath: string,
     *     AbsoluteIconPath?: string|null,
     *     AbsoluteManifestPath?: string|null,
     *     WorkingDirectory?: string|null,
     *     LaunchParameters?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fileSystemLocationName
 * @property string|null $inputManifestHash
 * @property string|null $inputManifestPath
 * @property list<string>|null $outputRelativeDirectories
 * @property string $rootPath
 * @property 'windows'|'posix' $rootPathFormat
 */
class ManifestProperties extends Shape
{
    /**
     * @param array{
     *     fileSystemLocationName?: string|null,
     *     inputManifestHash?: string|null,
     *     inputManifestPath?: string|null,
     *     outputRelativeDirectories?: list<string>|null,
     *     rootPath: string,
     *     rootPathFormat: 'windows'|'posix'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

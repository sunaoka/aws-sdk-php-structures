<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fileSystemLocationName
 * @property string $rootPath
 * @property 'windows'|'posix' $rootPathFormat
 * @property list<string>|null $outputRelativeDirectories
 * @property string|null $inputManifestPath
 * @property string|null $inputManifestHash
 */
class ManifestProperties extends Shape
{
    /**
     * @param array{
     *     fileSystemLocationName?: string|null,
     *     rootPath: string,
     *     rootPathFormat: 'windows'|'posix',
     *     outputRelativeDirectories?: list<string>|null,
     *     inputManifestPath?: string|null,
     *     inputManifestHash?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

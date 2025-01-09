<?php

namespace Sunaoka\Aws\Structures\Deadline\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileSystemLocationName
 * @property string $rootPath
 * @property 'windows'|'posix' $rootPathFormat
 * @property list<string> $outputRelativeDirectories
 * @property string $inputManifestPath
 * @property string $inputManifestHash
 */
class ManifestProperties extends Shape
{
    /**
     * @param array{
     *     fileSystemLocationName?: string,
     *     rootPath: string,
     *     rootPathFormat: 'windows'|'posix',
     *     outputRelativeDirectories?: list<string>,
     *     inputManifestPath?: string,
     *     inputManifestHash?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

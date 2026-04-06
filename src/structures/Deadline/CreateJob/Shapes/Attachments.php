<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COPIED'|'VIRTUAL'|null $fileSystem
 * @property list<ManifestProperties> $manifests
 */
class Attachments extends Shape
{
    /**
     * @param array{
     *     fileSystem?: 'COPIED'|'VIRTUAL'|null,
     *     manifests: list<ManifestProperties>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

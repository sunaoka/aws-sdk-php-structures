<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ManifestProperties> $manifests
 * @property 'COPIED'|'VIRTUAL' $fileSystem
 */
class Attachments extends Shape
{
    /**
     * @param array{
     *     manifests: list<ManifestProperties>,
     *     fileSystem?: 'COPIED'|'VIRTUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

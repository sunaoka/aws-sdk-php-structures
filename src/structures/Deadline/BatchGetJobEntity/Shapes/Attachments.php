<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ManifestProperties> $manifests
 * @property 'COPIED'|'VIRTUAL'|null $fileSystem
 */
class Attachments extends Shape
{
    /**
     * @param array{
     *     manifests: list<ManifestProperties>,
     *     fileSystem?: 'COPIED'|'VIRTUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

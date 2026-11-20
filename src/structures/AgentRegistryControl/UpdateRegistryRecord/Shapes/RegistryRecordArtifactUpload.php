<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $content
 * @property string|null $sha256
 */
class RegistryRecordArtifactUpload extends Shape
{
    /**
     * @param array{
     *     content: string|resource|\Psr\Http\Message\StreamInterface,
     *     sha256?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

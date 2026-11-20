<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\SearchDiscoverableRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sha256
 * @property string|null $downloadUrl
 */
class RegistryRecordArtifactDownload extends Shape
{
    /**
     * @param array{
     *     sha256?: string|null,
     *     downloadUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreateGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphName
 * @property array<string, string> $tags
 * @property bool $publicConnectivity
 * @property string $kmsKeyIdentifier
 * @property Shapes\VectorSearchConfiguration $vectorSearchConfiguration
 * @property int $replicaCount
 * @property bool $deletionProtection
 * @property int $provisionedMemory
 */
class CreateGraphRequest extends Request
{
    /**
     * @param array{
     *     graphName: string,
     *     tags?: array<string, string>,
     *     publicConnectivity?: bool,
     *     kmsKeyIdentifier?: string,
     *     vectorSearchConfiguration?: Shapes\VectorSearchConfiguration,
     *     replicaCount?: int,
     *     deletionProtection?: bool,
     *     provisionedMemory: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

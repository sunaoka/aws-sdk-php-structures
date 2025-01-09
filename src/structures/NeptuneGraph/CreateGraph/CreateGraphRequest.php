<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreateGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphName
 * @property array<string, string> $tags
 * @property bool $publicConnectivity
 * @property string $kmsKeyIdentifier
 * @property Shapes\VectorSearchConfiguration $vectorSearchConfiguration
 * @property int<0, 2> $replicaCount
 * @property bool $deletionProtection
 * @property int<16, 24576> $provisionedMemory
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
     *     replicaCount?: int<0, 2>,
     *     deletionProtection?: bool,
     *     provisionedMemory: int<16, 24576>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

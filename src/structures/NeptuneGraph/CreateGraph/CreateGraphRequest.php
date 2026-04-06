<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreateGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphName
 * @property array<string, string>|null $tags
 * @property bool|null $publicConnectivity
 * @property string|null $kmsKeyIdentifier
 * @property Shapes\VectorSearchConfiguration|null $vectorSearchConfiguration
 * @property int<0, 2>|null $replicaCount
 * @property bool|null $deletionProtection
 * @property int<16, 24576> $provisionedMemory
 */
class CreateGraphRequest extends Request
{
    /**
     * @param array{
     *     graphName: string,
     *     tags?: array<string, string>|null,
     *     publicConnectivity?: bool|null,
     *     kmsKeyIdentifier?: string|null,
     *     vectorSearchConfiguration?: Shapes\VectorSearchConfiguration|null,
     *     replicaCount?: int<0, 2>|null,
     *     deletionProtection?: bool|null,
     *     provisionedMemory: int<16, 24576>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

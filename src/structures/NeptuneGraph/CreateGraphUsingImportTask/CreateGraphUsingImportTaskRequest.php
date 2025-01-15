<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreateGraphUsingImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphName
 * @property array<string, string>|null $tags
 * @property bool|null $publicConnectivity
 * @property string|null $kmsKeyIdentifier
 * @property Shapes\VectorSearchConfiguration|null $vectorSearchConfiguration
 * @property int<0, 2>|null $replicaCount
 * @property bool|null $deletionProtection
 * @property Shapes\ImportOptions|null $importOptions
 * @property int<16, 24576>|null $maxProvisionedMemory
 * @property int<16, 24576>|null $minProvisionedMemory
 * @property bool|null $failOnError
 * @property string $source
 * @property 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES'|null $format
 * @property 'COLUMNAR'|null $parquetType
 * @property 'convertToIri'|null $blankNodeHandling
 * @property string $roleArn
 */
class CreateGraphUsingImportTaskRequest extends Request
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
     *     importOptions?: Shapes\ImportOptions|null,
     *     maxProvisionedMemory?: int<16, 24576>|null,
     *     minProvisionedMemory?: int<16, 24576>|null,
     *     failOnError?: bool|null,
     *     source: string,
     *     format?: 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES'|null,
     *     parquetType?: 'COLUMNAR'|null,
     *     blankNodeHandling?: 'convertToIri'|null,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

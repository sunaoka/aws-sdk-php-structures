<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreateGraphUsingImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphName
 * @property array<string, string> $tags
 * @property bool $publicConnectivity
 * @property string $kmsKeyIdentifier
 * @property Shapes\VectorSearchConfiguration $vectorSearchConfiguration
 * @property int $replicaCount
 * @property bool $deletionProtection
 * @property Shapes\ImportOptions $importOptions
 * @property int $maxProvisionedMemory
 * @property int $minProvisionedMemory
 * @property bool $failOnError
 * @property string $source
 * @property 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES' $format
 * @property 'COLUMNAR' $parquetType
 * @property 'convertToIri' $blankNodeHandling
 * @property string $roleArn
 */
class CreateGraphUsingImportTaskRequest extends Request
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
     *     importOptions?: Shapes\ImportOptions,
     *     maxProvisionedMemory?: int,
     *     minProvisionedMemory?: int,
     *     failOnError?: bool,
     *     source: string,
     *     format?: 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES',
     *     parquetType?: 'COLUMNAR',
     *     blankNodeHandling?: 'convertToIri',
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

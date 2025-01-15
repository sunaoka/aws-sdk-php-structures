<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ImportOptions|null $importOptions
 * @property bool|null $failOnError
 * @property string $source
 * @property 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES'|null $format
 * @property 'COLUMNAR'|null $parquetType
 * @property 'convertToIri'|null $blankNodeHandling
 * @property string $graphIdentifier
 * @property string $roleArn
 */
class StartImportTaskRequest extends Request
{
    /**
     * @param array{
     *     importOptions?: Shapes\ImportOptions|null,
     *     failOnError?: bool|null,
     *     source: string,
     *     format?: 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES'|null,
     *     parquetType?: 'COLUMNAR'|null,
     *     blankNodeHandling?: 'convertToIri'|null,
     *     graphIdentifier: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

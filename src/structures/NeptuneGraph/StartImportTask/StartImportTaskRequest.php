<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ImportOptions $importOptions
 * @property bool $failOnError
 * @property string $source
 * @property 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES' $format
 * @property 'COLUMNAR' $parquetType
 * @property 'convertToIri' $blankNodeHandling
 * @property string $graphIdentifier
 * @property string $roleArn
 */
class StartImportTaskRequest extends Request
{
    /**
     * @param array{
     *     importOptions?: Shapes\ImportOptions,
     *     failOnError?: bool,
     *     source: string,
     *     format?: 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES',
     *     parquetType?: 'COLUMNAR',
     *     blankNodeHandling?: 'convertToIri',
     *     graphIdentifier: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

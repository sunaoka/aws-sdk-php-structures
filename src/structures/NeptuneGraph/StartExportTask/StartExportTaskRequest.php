<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $roleArn
 * @property 'PARQUET'|'CSV' $format
 * @property string $destination
 * @property string $kmsKeyIdentifier
 * @property 'COLUMNAR' $parquetType
 * @property Shapes\ExportFilter $exportFilter
 * @property array<string, string> $tags
 */
class StartExportTaskRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     roleArn: string,
     *     format: 'PARQUET'|'CSV',
     *     destination: string,
     *     kmsKeyIdentifier: string,
     *     parquetType?: 'COLUMNAR',
     *     exportFilter?: Shapes\ExportFilter,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

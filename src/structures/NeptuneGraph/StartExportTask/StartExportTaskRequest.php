<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $roleArn
 * @property 'PARQUET'|'CSV' $format
 * @property string $destination
 * @property string $kmsKeyIdentifier
 * @property 'COLUMNAR'|null $parquetType
 * @property Shapes\ExportFilter|null $exportFilter
 * @property array<string, string>|null $tags
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
     *     parquetType?: 'COLUMNAR'|null,
     *     exportFilter?: Shapes\ExportFilter|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

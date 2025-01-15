<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateBatchLoadTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property Shapes\DataModelConfiguration|null $DataModelConfiguration
 * @property Shapes\DataSourceConfiguration $DataSourceConfiguration
 * @property Shapes\ReportConfiguration $ReportConfiguration
 * @property string $TargetDatabaseName
 * @property string $TargetTableName
 * @property int|null $RecordVersion
 */
class CreateBatchLoadTaskRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DataModelConfiguration?: Shapes\DataModelConfiguration|null,
     *     DataSourceConfiguration: Shapes\DataSourceConfiguration,
     *     ReportConfiguration: Shapes\ReportConfiguration,
     *     TargetDatabaseName: string,
     *     TargetTableName: string,
     *     RecordVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

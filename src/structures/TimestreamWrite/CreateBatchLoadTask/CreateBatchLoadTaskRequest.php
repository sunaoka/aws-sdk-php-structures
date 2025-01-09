<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateBatchLoadTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property Shapes\DataModelConfiguration $DataModelConfiguration
 * @property Shapes\DataSourceConfiguration $DataSourceConfiguration
 * @property Shapes\ReportConfiguration $ReportConfiguration
 * @property string $TargetDatabaseName
 * @property string $TargetTableName
 * @property int $RecordVersion
 */
class CreateBatchLoadTaskRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DataModelConfiguration?: Shapes\DataModelConfiguration,
     *     DataSourceConfiguration: Shapes\DataSourceConfiguration,
     *     ReportConfiguration: Shapes\ReportConfiguration,
     *     TargetDatabaseName: string,
     *     TargetTableName: string,
     *     RecordVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

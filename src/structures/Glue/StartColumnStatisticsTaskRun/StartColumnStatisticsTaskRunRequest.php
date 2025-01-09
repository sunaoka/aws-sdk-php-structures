<?php

namespace Sunaoka\Aws\Structures\Glue\StartColumnStatisticsTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<string> $ColumnNameList
 * @property string $Role
 * @property double $SampleSize
 * @property string $CatalogID
 * @property string $SecurityConfiguration
 */
class StartColumnStatisticsTaskRunRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     ColumnNameList?: list<string>,
     *     Role: string,
     *     SampleSize?: double,
     *     CatalogID?: string,
     *     SecurityConfiguration?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

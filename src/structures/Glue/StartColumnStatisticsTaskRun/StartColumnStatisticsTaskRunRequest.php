<?php

namespace Sunaoka\Aws\Structures\Glue\StartColumnStatisticsTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<string>|null $ColumnNameList
 * @property string $Role
 * @property double|null $SampleSize
 * @property string|null $CatalogID
 * @property string|null $SecurityConfiguration
 */
class StartColumnStatisticsTaskRunRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     ColumnNameList?: list<string>|null,
     *     Role: string,
     *     SampleSize?: double|null,
     *     CatalogID?: string|null,
     *     SecurityConfiguration?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\CreateColumnStatisticsTaskSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $Role
 * @property string $Schedule
 * @property list<string> $ColumnNameList
 * @property double $SampleSize
 * @property string $CatalogID
 * @property string $SecurityConfiguration
 * @property array<string, string> $Tags
 */
class CreateColumnStatisticsTaskSettingsRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     Role: string,
     *     Schedule?: string,
     *     ColumnNameList?: list<string>,
     *     SampleSize?: double,
     *     CatalogID?: string,
     *     SecurityConfiguration?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

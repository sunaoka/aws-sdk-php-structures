<?php

namespace Sunaoka\Aws\Structures\Glue\CreateColumnStatisticsTaskSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $Role
 * @property string|null $Schedule
 * @property list<string>|null $ColumnNameList
 * @property double|null $SampleSize
 * @property string|null $CatalogID
 * @property string|null $SecurityConfiguration
 * @property array<string, string>|null $Tags
 */
class CreateColumnStatisticsTaskSettingsRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     Role: string,
     *     Schedule?: string|null,
     *     ColumnNameList?: list<string>|null,
     *     SampleSize?: double|null,
     *     CatalogID?: string|null,
     *     SecurityConfiguration?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

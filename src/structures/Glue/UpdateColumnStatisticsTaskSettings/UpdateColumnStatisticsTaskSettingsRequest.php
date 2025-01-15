<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsTaskSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property string|null $Role
 * @property string|null $Schedule
 * @property list<string>|null $ColumnNameList
 * @property double|null $SampleSize
 * @property string|null $CatalogID
 * @property string|null $SecurityConfiguration
 */
class UpdateColumnStatisticsTaskSettingsRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     Role?: string|null,
     *     Schedule?: string|null,
     *     ColumnNameList?: list<string>|null,
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

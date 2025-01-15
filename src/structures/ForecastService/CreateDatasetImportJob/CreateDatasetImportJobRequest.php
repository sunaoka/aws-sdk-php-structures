<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateDatasetImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetImportJobName
 * @property string $DatasetArn
 * @property Shapes\DataSource $DataSource
 * @property string|null $TimestampFormat
 * @property string|null $TimeZone
 * @property bool|null $UseGeolocationForTimeZone
 * @property string|null $GeolocationFormat
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $Format
 * @property 'FULL'|'INCREMENTAL'|null $ImportMode
 */
class CreateDatasetImportJobRequest extends Request
{
    /**
     * @param array{
     *     DatasetImportJobName: string,
     *     DatasetArn: string,
     *     DataSource: Shapes\DataSource,
     *     TimestampFormat?: string|null,
     *     TimeZone?: string|null,
     *     UseGeolocationForTimeZone?: bool|null,
     *     GeolocationFormat?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Format?: string|null,
     *     ImportMode?: 'FULL'|'INCREMENTAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

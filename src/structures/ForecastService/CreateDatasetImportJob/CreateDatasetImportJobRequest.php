<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateDatasetImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetImportJobName
 * @property string $DatasetArn
 * @property Shapes\DataSource $DataSource
 * @property string $TimestampFormat
 * @property string $TimeZone
 * @property bool $UseGeolocationForTimeZone
 * @property string $GeolocationFormat
 * @property list<Shapes\Tag> $Tags
 * @property string $Format
 * @property 'FULL'|'INCREMENTAL' $ImportMode
 */
class CreateDatasetImportJobRequest extends Request
{
    /**
     * @param array{
     *     DatasetImportJobName: string,
     *     DatasetArn: string,
     *     DataSource: Shapes\DataSource,
     *     TimestampFormat?: string,
     *     TimeZone?: string,
     *     UseGeolocationForTimeZone?: bool,
     *     GeolocationFormat?: string,
     *     Tags?: list<Shapes\Tag>,
     *     Format?: string,
     *     ImportMode?: 'FULL'|'INCREMENTAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

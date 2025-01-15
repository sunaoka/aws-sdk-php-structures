<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateForecastExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ForecastExportJobName
 * @property string $ForecastArn
 * @property Shapes\DataDestination $Destination
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $Format
 */
class CreateForecastExportJobRequest extends Request
{
    /**
     * @param array{
     *     ForecastExportJobName: string,
     *     ForecastArn: string,
     *     Destination: Shapes\DataDestination,
     *     Tags?: list<Shapes\Tag>|null,
     *     Format?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

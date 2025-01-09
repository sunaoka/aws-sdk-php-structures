<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfForecastExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfForecastExportName
 * @property list<string> $WhatIfForecastArns
 * @property Shapes\DataDestination $Destination
 * @property list<Shapes\Tag> $Tags
 * @property string $Format
 */
class CreateWhatIfForecastExportRequest extends Request
{
    /**
     * @param array{
     *     WhatIfForecastExportName: string,
     *     WhatIfForecastArns: list<string>,
     *     Destination: Shapes\DataDestination,
     *     Tags?: list<Shapes\Tag>,
     *     Format?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

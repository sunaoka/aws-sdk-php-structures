<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfForecastExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfForecastExportName
 * @property list<string> $WhatIfForecastArns
 * @property Shapes\DataDestination $Destination
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $Format
 */
class CreateWhatIfForecastExportRequest extends Request
{
    /**
     * @param array{
     *     WhatIfForecastExportName: string,
     *     WhatIfForecastArns: list<string>,
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

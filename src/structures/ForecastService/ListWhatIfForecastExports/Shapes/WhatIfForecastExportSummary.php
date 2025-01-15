<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListWhatIfForecastExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WhatIfForecastExportArn
 * @property list<string>|null $WhatIfForecastArns
 * @property string|null $WhatIfForecastExportName
 * @property DataDestination|null $Destination
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class WhatIfForecastExportSummary extends Shape
{
    /**
     * @param array{
     *     WhatIfForecastExportArn?: string|null,
     *     WhatIfForecastArns?: list<string>|null,
     *     WhatIfForecastExportName?: string|null,
     *     Destination?: DataDestination|null,
     *     Status?: string|null,
     *     Message?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModificationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

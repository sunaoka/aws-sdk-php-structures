<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WhatIfPointScenario $WhatIfPointScenario
 * @property WhatIfRangeScenario $WhatIfRangeScenario
 */
class ForecastScenario extends Shape
{
    /**
     * @param array{
     *     WhatIfPointScenario?: WhatIfPointScenario,
     *     WhatIfRangeScenario?: WhatIfRangeScenario
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

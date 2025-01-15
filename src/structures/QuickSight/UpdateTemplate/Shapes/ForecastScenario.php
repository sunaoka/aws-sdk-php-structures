<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WhatIfPointScenario|null $WhatIfPointScenario
 * @property WhatIfRangeScenario|null $WhatIfRangeScenario
 */
class ForecastScenario extends Shape
{
    /**
     * @param array{
     *     WhatIfPointScenario?: WhatIfPointScenario|null,
     *     WhatIfRangeScenario?: WhatIfRangeScenario|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

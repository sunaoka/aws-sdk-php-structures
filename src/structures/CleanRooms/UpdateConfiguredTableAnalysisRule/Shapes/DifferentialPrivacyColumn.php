<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 */
class DifferentialPrivacyColumn extends Shape
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

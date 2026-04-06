<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DifferentialPrivacyColumn> $columns
 */
class DifferentialPrivacyConfiguration extends Shape
{
    /**
     * @param array{columns: list<DifferentialPrivacyColumn>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

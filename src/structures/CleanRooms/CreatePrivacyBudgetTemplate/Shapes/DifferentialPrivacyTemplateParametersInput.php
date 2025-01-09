<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreatePrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $epsilon
 * @property int $usersNoisePerQuery
 */
class DifferentialPrivacyTemplateParametersInput extends Shape
{
    /**
     * @param array{
     *     epsilon: int,
     *     usersNoisePerQuery: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

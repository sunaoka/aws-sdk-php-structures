<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdatePrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 20>|null $epsilon
 * @property int<10, 100>|null $usersNoisePerQuery
 */
class DifferentialPrivacyTemplateUpdateParameters extends Shape
{
    /**
     * @param array{
     *     epsilon?: int<1, 20>|null,
     *     usersNoisePerQuery?: int<10, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

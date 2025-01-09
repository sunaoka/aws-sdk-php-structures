<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationPrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $epsilon
 * @property int $usersNoisePerQuery
 */
class DifferentialPrivacyTemplateParametersOutput extends Shape
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

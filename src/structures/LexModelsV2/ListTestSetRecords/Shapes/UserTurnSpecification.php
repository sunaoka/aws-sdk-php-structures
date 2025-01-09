<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserTurnInputSpecification $input
 * @property UserTurnOutputSpecification $expected
 */
class UserTurnSpecification extends Shape
{
    /**
     * @param array{
     *     input: UserTurnInputSpecification,
     *     expected: UserTurnOutputSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

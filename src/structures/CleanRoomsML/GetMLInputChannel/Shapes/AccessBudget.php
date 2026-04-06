<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property list<AccessBudgetDetails> $details
 * @property int<0, max> $aggregateRemainingBudget
 */
class AccessBudget extends Shape
{
    /**
     * @param array{
     *     resourceArn: string,
     *     details: list<AccessBudgetDetails>,
     *     aggregateRemainingBudget: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

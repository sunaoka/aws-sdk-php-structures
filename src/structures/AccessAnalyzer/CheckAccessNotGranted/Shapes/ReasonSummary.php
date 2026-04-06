<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckAccessNotGranted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property int|null $statementIndex
 * @property string|null $statementId
 */
class ReasonSummary extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     statementIndex?: int|null,
     *     statementId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckNoNewAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property int $statementIndex
 * @property string $statementId
 */
class ReasonSummary extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     statementIndex?: int,
     *     statementId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

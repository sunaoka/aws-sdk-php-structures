<?php

namespace Sunaoka\Aws\Structures\Textract\GetExpenseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 * @property list<int<0, max>>|null $Pages
 */
class Warning extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string|null,
     *     Pages?: list<int<0, max>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

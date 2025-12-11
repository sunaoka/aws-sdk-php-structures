<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USEFUL'|'NOT_USEFUL'|null $usefulness
 * @property string|null $comment
 * @property \Aws\Api\DateTimeResult|null $submittedAt
 */
class InvestigationFeedback extends Shape
{
    /**
     * @param array{
     *     usefulness?: 'USEFUL'|'NOT_USEFUL'|null,
     *     comment?: string|null,
     *     submittedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

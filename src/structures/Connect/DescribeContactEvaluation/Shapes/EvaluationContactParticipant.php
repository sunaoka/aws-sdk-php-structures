<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGENT'|'SYSTEM'|'CUSTOM_BOT'|null $ContactParticipantRole
 * @property string|null $ContactParticipantId
 */
class EvaluationContactParticipant extends Shape
{
    /**
     * @param array{
     *     ContactParticipantRole?: 'AGENT'|'SYSTEM'|'CUSTOM_BOT'|null,
     *     ContactParticipantId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

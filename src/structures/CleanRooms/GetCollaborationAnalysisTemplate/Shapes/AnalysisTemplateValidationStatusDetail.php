<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIFFERENTIAL_PRIVACY' $type
 * @property 'VALID'|'INVALID'|'UNABLE_TO_VALIDATE' $status
 * @property list<AnalysisTemplateValidationStatusReason>|null $reasons
 */
class AnalysisTemplateValidationStatusDetail extends Shape
{
    /**
     * @param array{
     *     type: 'DIFFERENTIAL_PRIVACY',
     *     status: 'VALID'|'INVALID'|'UNABLE_TO_VALIDATE',
     *     reasons?: list<AnalysisTemplateValidationStatusReason>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIFFERENTIAL_PRIVACY' $type
 * @property 'VALID'|'INVALID'|'UNABLE_TO_VALIDATE' $status
 * @property list<AnalysisTemplateValidationStatusReason> $reasons
 */
class AnalysisTemplateValidationStatusDetail extends Shape
{
    /**
     * @param array{
     *     type: 'DIFFERENTIAL_PRIVACY',
     *     status: 'VALID'|'INVALID'|'UNABLE_TO_VALIDATE',
     *     reasons?: list<AnalysisTemplateValidationStatusReason>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

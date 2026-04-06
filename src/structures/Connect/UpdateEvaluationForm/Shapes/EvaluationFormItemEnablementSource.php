<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUESTION_REF_ID' $Type
 * @property string|null $RefId
 */
class EvaluationFormItemEnablementSource extends Shape
{
    /**
     * @param array{
     *     Type: 'QUESTION_REF_ID',
     *     RefId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPTION_REF_ID' $Type
 * @property string|null $RefId
 */
class EvaluationFormItemEnablementSourceValue extends Shape
{
    /**
     * @param array{
     *     Type: 'OPTION_REF_ID',
     *     RefId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

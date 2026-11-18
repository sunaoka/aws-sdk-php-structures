<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPTION_REF_ID'|'STRING_VALUE'|'NUMERIC_VALUE'|'BOOLEAN_VALUE'|'DATETIME_VALUE' $Type
 * @property string|null $RefId
 * @property string|null $StringValue
 * @property double|null $NumericValue
 * @property bool|null $BooleanValue
 * @property \Aws\Api\DateTimeResult|null $DateTimeValue
 */
class EvaluationFormItemEnablementSourceValue extends Shape
{
    /**
     * @param array{
     *     Type: 'OPTION_REF_ID'|'STRING_VALUE'|'NUMERIC_VALUE'|'BOOLEAN_VALUE'|'DATETIME_VALUE',
     *     RefId?: string|null,
     *     StringValue?: string|null,
     *     NumericValue?: double|null,
     *     BooleanValue?: bool|null,
     *     DateTimeValue?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

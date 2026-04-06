<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property 'CannotParse'|'FieldValidationFailed'|'IdempotentParameterMismatchException'|'EventInOtherSession'|'ResourceConflict' $reason
 * @property list<ValidationExceptionField>|null $fieldList
 */
class ValidationException extends Shape
{
    /**
     * @param array{
     *     message: string,
     *     reason: 'CannotParse'|'FieldValidationFailed'|'IdempotentParameterMismatchException'|'EventInOtherSession'|'ResourceConflict',
     *     fieldList?: list<ValidationExceptionField>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

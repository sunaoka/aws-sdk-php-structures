<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldType
 * @property list<'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'CONTAINS'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP'> $filterOperators
 * @property list<string>|null $supportedValues
 * @property string|null $valueRegexPattern
 * @property string|null $supportedDateFormat
 * @property Range|null $fieldValueRange
 * @property Range|null $fieldLengthRange
 */
class FieldTypeDetails extends Shape
{
    /**
     * @param array{
     *     fieldType: string,
     *     filterOperators: list<'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'CONTAINS'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP'>,
     *     supportedValues?: list<string>|null,
     *     valueRegexPattern?: string|null,
     *     supportedDateFormat?: string|null,
     *     fieldValueRange?: Range|null,
     *     fieldLengthRange?: Range|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'CaseField' $type
 * @property string|null $fieldId
 * @property list<FieldValueUnion>|null $targetFieldValues
 * @property int<1, 129600> $targetSlaMinutes
 */
class SlaInputConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'CaseField',
     *     fieldId?: string|null,
     *     targetFieldValues?: list<FieldValueUnion>|null,
     *     targetSlaMinutes: int<1, 129600>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

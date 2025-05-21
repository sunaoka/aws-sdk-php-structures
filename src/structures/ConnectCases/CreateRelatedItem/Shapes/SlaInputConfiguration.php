<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fieldId
 * @property string $name
 * @property list<FieldValueUnion>|null $targetFieldValues
 * @property int<1, 129600> $targetSlaMinutes
 * @property 'CaseField' $type
 */
class SlaInputConfiguration extends Shape
{
    /**
     * @param array{
     *     fieldId?: string|null,
     *     name: string,
     *     targetFieldValues?: list<FieldValueUnion>|null,
     *     targetSlaMinutes: int<1, 129600>,
     *     type: 'CaseField'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

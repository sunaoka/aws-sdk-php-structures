<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'CaseField' $Type
 * @property string|null $FieldId
 * @property list<FieldValueUnion>|null $TargetFieldValues
 * @property int<1, 129600> $TargetSlaMinutes
 */
class CaseSlaConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'CaseField',
     *     FieldId?: string|null,
     *     TargetFieldValues?: list<FieldValueUnion>|null,
     *     TargetSlaMinutes: int<1, 129600>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

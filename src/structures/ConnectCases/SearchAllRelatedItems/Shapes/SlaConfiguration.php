<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchAllRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'CaseField' $type
 * @property 'Active'|'Overdue'|'Met'|'NotMet' $status
 * @property string|null $fieldId
 * @property list<FieldValueUnion>|null $targetFieldValues
 * @property \Aws\Api\DateTimeResult $targetTime
 * @property \Aws\Api\DateTimeResult|null $completionTime
 */
class SlaConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'CaseField',
     *     status: 'Active'|'Overdue'|'Met'|'NotMet',
     *     fieldId?: string|null,
     *     targetFieldValues?: list<FieldValueUnion>|null,
     *     targetTime: \Aws\Api\DateTimeResult,
     *     completionTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

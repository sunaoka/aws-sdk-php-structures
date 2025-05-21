<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $completionTime
 * @property string|null $fieldId
 * @property string $name
 * @property 'Active'|'Overdue'|'Met'|'NotMet' $status
 * @property list<FieldValueUnion>|null $targetFieldValues
 * @property \Aws\Api\DateTimeResult $targetTime
 * @property 'CaseField' $type
 */
class SlaConfiguration extends Shape
{
    /**
     * @param array{
     *     completionTime?: \Aws\Api\DateTimeResult|null,
     *     fieldId?: string|null,
     *     name: string,
     *     status: 'Active'|'Overdue'|'Met'|'NotMet',
     *     targetFieldValues?: list<FieldValueUnion>|null,
     *     targetTime: \Aws\Api\DateTimeResult,
     *     type: 'CaseField'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

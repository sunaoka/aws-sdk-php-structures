<?php

namespace Sunaoka\Aws\Structures\ConnectCases\PutCaseEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldIdentifier> $fields
 * @property 'All'|'System'|'Custom'|null $autoIncludeFields
 */
class CaseEventIncludedData extends Shape
{
    /**
     * @param array{
     *     fields: list<FieldIdentifier>,
     *     autoIncludeFields?: 'All'|'System'|'Custom'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

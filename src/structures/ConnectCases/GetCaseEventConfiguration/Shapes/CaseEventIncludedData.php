<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldIdentifier> $fields
 */
class CaseEventIncludedData extends Shape
{
    /**
     * @param array{fields: list<FieldIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

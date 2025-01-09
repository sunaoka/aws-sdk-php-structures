<?php

namespace Sunaoka\Aws\Structures\Macie2\ListManagedDataIdentifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINANCIAL_INFORMATION'|'PERSONAL_INFORMATION'|'CREDENTIALS'|'CUSTOM_IDENTIFIER' $category
 * @property string $id
 */
class ManagedDataIdentifierSummary extends Shape
{
    /**
     * @param array{
     *     category?: 'FINANCIAL_INFORMATION'|'PERSONAL_INFORMATION'|'CREDENTIALS'|'CUSTOM_IDENTIFIER',
     *     id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

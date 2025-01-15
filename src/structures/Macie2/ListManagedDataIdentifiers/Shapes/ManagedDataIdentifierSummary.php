<?php

namespace Sunaoka\Aws\Structures\Macie2\ListManagedDataIdentifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINANCIAL_INFORMATION'|'PERSONAL_INFORMATION'|'CREDENTIALS'|'CUSTOM_IDENTIFIER'|null $category
 * @property string|null $id
 */
class ManagedDataIdentifierSummary extends Shape
{
    /**
     * @param array{
     *     category?: 'FINANCIAL_INFORMATION'|'PERSONAL_INFORMATION'|'CREDENTIALS'|'CUSTOM_IDENTIFIER'|null,
     *     id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

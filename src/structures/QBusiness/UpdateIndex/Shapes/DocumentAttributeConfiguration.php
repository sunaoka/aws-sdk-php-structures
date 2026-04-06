<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'STRING'|'STRING_LIST'|'NUMBER'|'DATE'|null $type
 * @property 'ENABLED'|'DISABLED'|null $search
 */
class DocumentAttributeConfiguration extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: 'STRING'|'STRING_LIST'|'NUMBER'|'DATE'|null,
     *     search?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

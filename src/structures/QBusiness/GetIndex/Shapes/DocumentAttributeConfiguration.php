<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'STRING'|'STRING_LIST'|'NUMBER'|'DATE' $type
 * @property 'ENABLED'|'DISABLED' $search
 */
class DocumentAttributeConfiguration extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     type?: 'STRING'|'STRING_LIST'|'NUMBER'|'DATE',
     *     search?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

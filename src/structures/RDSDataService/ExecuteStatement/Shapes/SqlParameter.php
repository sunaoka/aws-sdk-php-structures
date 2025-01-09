<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property Field $value
 * @property 'JSON'|'UUID'|'TIMESTAMP'|'DATE'|'TIME'|'DECIMAL' $typeHint
 */
class SqlParameter extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     value?: Field,
     *     typeHint?: 'JSON'|'UUID'|'TIMESTAMP'|'DATE'|'TIME'|'DECIMAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

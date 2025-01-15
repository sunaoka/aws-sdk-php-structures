<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property Field|null $value
 * @property 'JSON'|'UUID'|'TIMESTAMP'|'DATE'|'TIME'|'DECIMAL'|null $typeHint
 */
class SqlParameter extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     value?: Field|null,
     *     typeHint?: 'JSON'|'UUID'|'TIMESTAMP'|'DATE'|'TIME'|'DECIMAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

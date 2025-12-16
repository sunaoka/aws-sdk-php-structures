<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'LONG'|'UNSIGNEDLONG'|'BOOLEAN'|'BINARY'|null $type
 * @property CommandParameterValue|null $value
 * @property CommandParameterValue|null $defaultValue
 * @property list<CommandParameterValueCondition>|null $valueConditions
 * @property string|null $description
 */
class CommandParameter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type?: 'STRING'|'INTEGER'|'DOUBLE'|'LONG'|'UNSIGNEDLONG'|'BOOLEAN'|'BINARY'|null,
     *     value?: CommandParameterValue|null,
     *     defaultValue?: CommandParameterValue|null,
     *     valueConditions?: list<CommandParameterValueCondition>|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

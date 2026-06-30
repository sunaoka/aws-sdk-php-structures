<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property 'TABLE'|'INTERMEDIATE_TABLE'|'ID_MAPPING_TABLE' $type
 * @property list<string> $value
 * @property string $sourceAccountId
 */
class InheritedAllowedAdditionalAnalysesSource extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     id: string,
     *     type: 'TABLE'|'INTERMEDIATE_TABLE'|'ID_MAPPING_TABLE',
     *     value: list<string>,
     *     sourceAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

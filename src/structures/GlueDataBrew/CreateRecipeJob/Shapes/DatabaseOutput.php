<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRecipeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlueConnectionName
 * @property DatabaseTableOutputOptions $DatabaseOptions
 * @property 'NEW_TABLE' $DatabaseOutputMode
 */
class DatabaseOutput extends Shape
{
    /**
     * @param array{
     *     GlueConnectionName: string,
     *     DatabaseOptions: DatabaseTableOutputOptions,
     *     DatabaseOutputMode?: 'NEW_TABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

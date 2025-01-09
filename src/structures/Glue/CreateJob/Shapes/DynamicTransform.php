<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $TransformName
 * @property list<string> $Inputs
 * @property list<TransformConfigParameter> $Parameters
 * @property string $FunctionName
 * @property string $Path
 * @property string $Version
 * @property list<GlueSchema> $OutputSchemas
 */
class DynamicTransform extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     TransformName: string,
     *     Inputs: list<string>,
     *     Parameters?: list<TransformConfigParameter>,
     *     FunctionName: string,
     *     Path: string,
     *     Version?: string,
     *     OutputSchemas?: list<GlueSchema>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

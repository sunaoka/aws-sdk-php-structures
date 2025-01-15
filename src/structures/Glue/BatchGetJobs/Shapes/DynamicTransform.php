<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $TransformName
 * @property list<string> $Inputs
 * @property list<TransformConfigParameter>|null $Parameters
 * @property string $FunctionName
 * @property string $Path
 * @property string|null $Version
 * @property list<GlueSchema>|null $OutputSchemas
 */
class DynamicTransform extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     TransformName: string,
     *     Inputs: list<string>,
     *     Parameters?: list<TransformConfigParameter>|null,
     *     FunctionName: string,
     *     Path: string,
     *     Version?: string|null,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

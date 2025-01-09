<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRecipeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location $TempDirectory
 * @property string $TableName
 */
class DatabaseTableOutputOptions extends Shape
{
    /**
     * @param array{
     *     TempDirectory?: S3Location,
     *     TableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

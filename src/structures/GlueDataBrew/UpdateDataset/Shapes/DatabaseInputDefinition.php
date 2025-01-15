<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlueConnectionName
 * @property string|null $DatabaseTableName
 * @property S3Location|null $TempDirectory
 * @property string|null $QueryString
 */
class DatabaseInputDefinition extends Shape
{
    /**
     * @param array{
     *     GlueConnectionName: string,
     *     DatabaseTableName?: string|null,
     *     TempDirectory?: S3Location|null,
     *     QueryString?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

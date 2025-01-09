<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlueConnectionName
 * @property string $DatabaseTableName
 * @property S3Location $TempDirectory
 * @property string $QueryString
 */
class DatabaseInputDefinition extends Shape
{
    /**
     * @param array{
     *     GlueConnectionName: string,
     *     DatabaseTableName?: string,
     *     TempDirectory?: S3Location,
     *     QueryString?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

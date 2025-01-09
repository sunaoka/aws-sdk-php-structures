<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $databaseName
 * @property string $tablePrefix
 */
class GlueDataCatalogConfig extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     databaseName: string,
     *     tablePrefix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'APPSYNC_JS' $name
 * @property string $runtimeVersion
 */
class AppSyncRuntime extends Shape
{
    /**
     * @param array{
     *     name: 'APPSYNC_JS',
     *     runtimeVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

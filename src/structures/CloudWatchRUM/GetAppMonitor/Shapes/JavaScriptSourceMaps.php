<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Uri
 * @property 'ENABLED'|'DISABLED' $Status
 */
class JavaScriptSourceMaps extends Shape
{
    /**
     * @param array{
     *     S3Uri?: string|null,
     *     Status: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

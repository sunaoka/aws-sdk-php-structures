<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property string|null $S3Uri
 */
class JavaScriptSourceMaps extends Shape
{
    /**
     * @param array{
     *     Status: 'ENABLED'|'DISABLED',
     *     S3Uri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

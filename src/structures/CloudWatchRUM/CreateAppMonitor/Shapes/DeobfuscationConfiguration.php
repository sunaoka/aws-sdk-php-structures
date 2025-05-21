<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\CreateAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JavaScriptSourceMaps|null $JavaScriptSourceMaps
 */
class DeobfuscationConfiguration extends Shape
{
    /**
     * @param array{JavaScriptSourceMaps?: JavaScriptSourceMaps|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

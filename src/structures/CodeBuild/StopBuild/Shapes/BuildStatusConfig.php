<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $context
 * @property string|null $targetUrl
 */
class BuildStatusConfig extends Shape
{
    /**
     * @param array{
     *     context?: string|null,
     *     targetUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

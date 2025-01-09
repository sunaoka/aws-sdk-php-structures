<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $context
 * @property string $targetUrl
 */
class BuildStatusConfig extends Shape
{
    /**
     * @param array{
     *     context?: string,
     *     targetUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

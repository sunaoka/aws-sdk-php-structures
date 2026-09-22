<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $purpose
 * @property string|null $language
 * @property string|null $framework
 * @property string|null $kind
 * @property string|null $repository
 */
class NodeSemantics extends Shape
{
    /**
     * @param array{
     *     purpose?: string|null,
     *     language?: string|null,
     *     framework?: string|null,
     *     kind?: string|null,
     *     repository?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\CreateView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputSchema
 * @property string $Template
 * @property list<string> $Actions
 */
class ViewContent extends Shape
{
    /**
     * @param array{
     *     InputSchema?: string,
     *     Template?: string,
     *     Actions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

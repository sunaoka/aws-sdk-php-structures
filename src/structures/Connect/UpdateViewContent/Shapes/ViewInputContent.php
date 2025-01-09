<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateViewContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Template
 * @property list<string> $Actions
 */
class ViewInputContent extends Shape
{
    /**
     * @param array{
     *     Template?: string,
     *     Actions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

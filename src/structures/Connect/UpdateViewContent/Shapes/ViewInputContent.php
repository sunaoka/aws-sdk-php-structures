<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateViewContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Template
 * @property list<string>|null $Actions
 */
class ViewInputContent extends Shape
{
    /**
     * @param array{
     *     Template?: string|null,
     *     Actions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

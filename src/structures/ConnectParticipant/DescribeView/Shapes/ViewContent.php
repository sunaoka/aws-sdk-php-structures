<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\DescribeView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputSchema
 * @property string|null $Template
 * @property list<string>|null $Actions
 */
class ViewContent extends Shape
{
    /**
     * @param array{
     *     InputSchema?: string|null,
     *     Template?: string|null,
     *     Actions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

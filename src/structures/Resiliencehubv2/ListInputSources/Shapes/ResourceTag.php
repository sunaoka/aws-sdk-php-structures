<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListInputSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property list<string> $values
 */
class ResourceTag extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

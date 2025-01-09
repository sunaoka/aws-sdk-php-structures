<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListRevisionAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TagKey
 * @property list<string> $TagValues
 */
class LFTag extends Shape
{
    /**
     * @param array{
     *     TagKey: string,
     *     TagValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\OAM\ListAttachedLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Label
 * @property string $LinkArn
 * @property list<string> $ResourceTypes
 */
class ListAttachedLinksItem extends Shape
{
    /**
     * @param array{
     *     Label?: string,
     *     LinkArn?: string,
     *     ResourceTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\OAM\ListAttachedLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Label
 * @property string|null $LinkArn
 * @property list<string>|null $ResourceTypes
 */
class ListAttachedLinksItem extends Shape
{
    /**
     * @param array{
     *     Label?: string|null,
     *     LinkArn?: string|null,
     *     ResourceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

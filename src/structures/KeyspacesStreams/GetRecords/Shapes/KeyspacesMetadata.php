<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $expirationTime
 * @property string|null $writeTime
 */
class KeyspacesMetadata extends Shape
{
    /**
     * @param array{
     *     expirationTime?: string|null,
     *     writeTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

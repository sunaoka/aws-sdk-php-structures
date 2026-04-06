<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'UPLOAD'> $mode
 * @property StreamingSessionStorageRoot|null $root
 */
class StreamConfigurationSessionStorage extends Shape
{
    /**
     * @param array{
     *     mode: list<'UPLOAD'>,
     *     root?: StreamingSessionStorageRoot|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProviderName
 * @property string $ServiceName
 */
class MultiplexProgramServiceDescriptor extends Shape
{
    /**
     * @param array{
     *     ProviderName: string,
     *     ServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

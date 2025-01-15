<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceIp
 * @property string $Url
 */
class MulticastSource extends Shape
{
    /**
     * @param array{
     *     SourceIp?: string|null,
     *     Url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

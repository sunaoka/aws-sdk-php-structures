<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceIp
 * @property string $Url
 */
class MulticastSourceCreateRequest extends Shape
{
    /**
     * @param array{
     *     SourceIp?: string,
     *     Url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

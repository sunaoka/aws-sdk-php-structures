<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PasswordParam
 * @property string $Uri
 * @property string $Username
 */
class InputLocation extends Shape
{
    /**
     * @param array{
     *     PasswordParam?: string,
     *     Uri: string,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

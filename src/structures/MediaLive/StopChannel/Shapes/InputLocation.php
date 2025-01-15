<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PasswordParam
 * @property string $Uri
 * @property string|null $Username
 */
class InputLocation extends Shape
{
    /**
     * @param array{
     *     PasswordParam?: string|null,
     *     Uri: string,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property string|null $Type
 * @property string|null $Display
 * @property bool|null $Primary
 */
class Photo extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     Type?: string|null,
     *     Display?: string|null,
     *     Primary?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

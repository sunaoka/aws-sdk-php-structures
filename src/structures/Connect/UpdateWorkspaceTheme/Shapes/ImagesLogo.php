<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspaceTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Default
 * @property string|null $Favicon
 */
class ImagesLogo extends Shape
{
    /**
     * @param array{
     *     Default?: string|null,
     *     Favicon?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

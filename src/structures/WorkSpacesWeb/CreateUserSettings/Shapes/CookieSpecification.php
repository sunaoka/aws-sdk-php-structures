<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domain
 * @property string $name
 * @property string $path
 */
class CookieSpecification extends Shape
{
    /**
     * @param array{
     *     domain: string,
     *     name?: string,
     *     path?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domain
 * @property string|null $name
 * @property string|null $path
 */
class CookieSpecification extends Shape
{
    /**
     * @param array{
     *     domain: string,
     *     name?: string|null,
     *     path?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

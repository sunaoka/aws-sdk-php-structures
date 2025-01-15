<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DetailedTitle
 * @property string|null $LongDescription
 */
class ResourceServerScopeDetails extends Shape
{
    /**
     * @param array{
     *     DetailedTitle?: string|null,
     *     LongDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

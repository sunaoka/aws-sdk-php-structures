<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LongDescription
 * @property string|null $DetailedTitle
 */
class ResourceServerScopeDetails extends Shape
{
    /**
     * @param array{
     *     LongDescription?: string|null,
     *     DetailedTitle?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $includeAll
 * @property ResourceSet|null $include
 * @property ResourceSet|null $exclude
 */
class ResourceScope extends Shape
{
    /**
     * @param array{
     *     includeAll?: bool|null,
     *     include?: ResourceSet|null,
     *     exclude?: ResourceSet|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

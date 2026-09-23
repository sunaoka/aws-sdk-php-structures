<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Unit|null $includeAll
 * @property AccountSet|null $include
 * @property AccountSet|null $exclude
 */
class AccountFilter extends Shape
{
    /**
     * @param array{
     *     includeAll?: Unit|null,
     *     include?: AccountSet|null,
     *     exclude?: AccountSet|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

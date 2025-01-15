<?php

namespace Sunaoka\Aws\Structures\IdentityStore\GetUserId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalId|null $ExternalId
 * @property UniqueAttribute|null $UniqueAttribute
 */
class AlternateIdentifier extends Shape
{
    /**
     * @param array{
     *     ExternalId?: ExternalId|null,
     *     UniqueAttribute?: UniqueAttribute|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IdentityStore\GetUserId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalId $ExternalId
 * @property UniqueAttribute $UniqueAttribute
 */
class AlternateIdentifier extends Shape
{
    /**
     * @param array{
     *     ExternalId?: ExternalId,
     *     UniqueAttribute?: UniqueAttribute
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

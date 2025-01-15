<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $unspecified
 * @property EntityIdentifier|null $identifier
 */
class EntityReference extends Shape
{
    /**
     * @param array{
     *     unspecified?: bool|null,
     *     identifier?: EntityIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

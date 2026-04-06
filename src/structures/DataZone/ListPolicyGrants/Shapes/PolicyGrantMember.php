<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property PolicyGrantDetail|null $detail
 * @property PolicyGrantPrincipal|null $principal
 */
class PolicyGrantMember extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     detail?: PolicyGrantDetail|null,
     *     principal?: PolicyGrantPrincipal|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

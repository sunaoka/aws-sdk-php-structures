<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PolicyGrantPrincipal|null $principal
 * @property PolicyGrantDetail|null $detail
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $grantId
 */
class PolicyGrantMember extends Shape
{
    /**
     * @param array{
     *     principal?: PolicyGrantPrincipal|null,
     *     detail?: PolicyGrantDetail|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     grantId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

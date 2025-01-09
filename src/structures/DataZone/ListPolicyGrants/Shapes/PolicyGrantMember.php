<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property PolicyGrantDetail $detail
 * @property PolicyGrantPrincipal $principal
 */
class PolicyGrantMember extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     detail?: PolicyGrantDetail,
     *     principal?: PolicyGrantPrincipal
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

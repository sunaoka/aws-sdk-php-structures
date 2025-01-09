<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetPoliciesStats\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EncryptionPolicyCount
 * @property int $NetworkPolicyCount
 */
class SecurityPolicyStats extends Shape
{
    /**
     * @param array{
     *     EncryptionPolicyCount?: int,
     *     NetworkPolicyCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

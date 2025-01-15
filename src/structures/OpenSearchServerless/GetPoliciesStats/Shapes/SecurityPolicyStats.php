<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetPoliciesStats\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $EncryptionPolicyCount
 * @property int|null $NetworkPolicyCount
 */
class SecurityPolicyStats extends Shape
{
    /**
     * @param array{
     *     EncryptionPolicyCount?: int|null,
     *     NetworkPolicyCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetSampledRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ResponseCode
 * @property int $SolveTimestamp
 * @property 'TOKEN_MISSING'|'TOKEN_EXPIRED'|'TOKEN_INVALID'|'TOKEN_DOMAIN_MISMATCH' $FailureReason
 */
class ChallengeResponse extends Shape
{
    /**
     * @param array{
     *     ResponseCode?: int,
     *     SolveTimestamp?: int,
     *     FailureReason?: 'TOKEN_MISSING'|'TOKEN_EXPIRED'|'TOKEN_INVALID'|'TOKEN_DOMAIN_MISMATCH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

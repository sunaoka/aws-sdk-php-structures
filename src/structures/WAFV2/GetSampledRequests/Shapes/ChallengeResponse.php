<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetSampledRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ResponseCode
 * @property int|null $SolveTimestamp
 * @property 'TOKEN_MISSING'|'TOKEN_EXPIRED'|'TOKEN_INVALID'|'TOKEN_DOMAIN_MISMATCH'|null $FailureReason
 */
class ChallengeResponse extends Shape
{
    /**
     * @param array{
     *     ResponseCode?: int|null,
     *     SolveTimestamp?: int|null,
     *     FailureReason?: 'TOKEN_MISSING'|'TOKEN_EXPIRED'|'TOKEN_INVALID'|'TOKEN_DOMAIN_MISMATCH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

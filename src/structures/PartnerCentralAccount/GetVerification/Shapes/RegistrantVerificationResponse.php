<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetVerification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CompletionUrl
 * @property \Aws\Api\DateTimeResult $CompletionUrlExpiresAt
 */
class RegistrantVerificationResponse extends Shape
{
    /**
     * @param array{
     *     CompletionUrl: string,
     *     CompletionUrlExpiresAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetVerification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BusinessVerificationDetails $BusinessVerificationDetails
 * @property string|null $CompletionUrl
 * @property \Aws\Api\DateTimeResult|null $CompletionUrlExpiresAt
 */
class BusinessVerificationResponse extends Shape
{
    /**
     * @param array{
     *     BusinessVerificationDetails: BusinessVerificationDetails,
     *     CompletionUrl?: string|null,
     *     CompletionUrlExpiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

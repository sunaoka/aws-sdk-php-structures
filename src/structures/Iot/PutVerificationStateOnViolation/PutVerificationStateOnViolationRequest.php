<?php

namespace Sunaoka\Aws\Structures\Iot\PutVerificationStateOnViolation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $violationId
 * @property 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN' $verificationState
 * @property string|null $verificationStateDescription
 */
class PutVerificationStateOnViolationRequest extends Request
{
    /**
     * @param array{
     *     violationId: string,
     *     verificationState: 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN',
     *     verificationStateDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

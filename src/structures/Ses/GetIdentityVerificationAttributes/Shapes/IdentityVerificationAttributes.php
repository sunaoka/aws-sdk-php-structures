<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityVerificationAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Pending'|'Success'|'Failed'|'TemporaryFailure'|'NotStarted' $VerificationStatus
 * @property string $VerificationToken
 */
class IdentityVerificationAttributes extends Shape
{
    /**
     * @param array{
     *     VerificationStatus: 'Pending'|'Success'|'Failed'|'TemporaryFailure'|'NotStarted',
     *     VerificationToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificateDomainValidations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmailValidationChallenge|null $EmailValidationChallenge
 * @property DnsValidationChallenge|null $DnsValidationChallenge
 */
class ValidationChallenge extends Shape
{
    /**
     * @param array{
     *     EmailValidationChallenge?: EmailValidationChallenge|null,
     *     DnsValidationChallenge?: DnsValidationChallenge|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

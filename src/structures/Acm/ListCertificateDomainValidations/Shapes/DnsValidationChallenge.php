<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificateDomainValidations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceRecord|null $ResourceRecord
 */
class DnsValidationChallenge extends Shape
{
    /**
     * @param array{ResourceRecord?: ResourceRecord|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

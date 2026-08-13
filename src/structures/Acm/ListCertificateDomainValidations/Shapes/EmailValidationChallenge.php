<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificateDomainValidations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ValidationEmails
 * @property string|null $ValidationDomain
 */
class EmailValidationChallenge extends Shape
{
    /**
     * @param array{
     *     ValidationEmails?: list<string>|null,
     *     ValidationDomain?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

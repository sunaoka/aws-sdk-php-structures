<?php

namespace Sunaoka\Aws\Structures\Acm\ResendValidationEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property string $Domain
 * @property string $ValidationDomain
 */
class ResendValidationEmailRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     Domain: string,
     *     ValidationDomain: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

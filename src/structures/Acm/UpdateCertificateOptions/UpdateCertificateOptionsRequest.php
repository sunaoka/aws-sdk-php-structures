<?php

namespace Sunaoka\Aws\Structures\Acm\UpdateCertificateOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property Shapes\CertificateOptions $Options
 */
class UpdateCertificateOptionsRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     Options: Shapes\CertificateOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

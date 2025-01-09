<?php

namespace Sunaoka\Aws\Structures\Acm\ListTagsForCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 */
class ListTagsForCertificateRequest extends Request
{
    /**
     * @param array{CertificateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

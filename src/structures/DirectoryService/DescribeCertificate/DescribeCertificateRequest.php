<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $CertificateId
 */
class DescribeCertificateRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     CertificateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

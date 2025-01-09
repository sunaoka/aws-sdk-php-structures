<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateId
 * @property \Aws\Api\DateTimeResult $ActiveDate
 * @property \Aws\Api\DateTimeResult $InactiveDate
 * @property string $Description
 */
class UpdateCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateId: string,
     *     ActiveDate?: \Aws\Api\DateTimeResult,
     *     InactiveDate?: \Aws\Api\DateTimeResult,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

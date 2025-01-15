<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateId
 * @property \Aws\Api\DateTimeResult|null $ActiveDate
 * @property \Aws\Api\DateTimeResult|null $InactiveDate
 * @property string|null $Description
 */
class UpdateCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateId: string,
     *     ActiveDate?: \Aws\Api\DateTimeResult|null,
     *     InactiveDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

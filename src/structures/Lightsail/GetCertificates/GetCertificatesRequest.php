<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'> $certificateStatuses
 * @property bool $includeCertificateDetails
 * @property string $certificateName
 * @property string $pageToken
 */
class GetCertificatesRequest extends Request
{
    /**
     * @param array{
     *     certificateStatuses?: list<'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'>,
     *     includeCertificateDetails?: bool,
     *     certificateName?: string,
     *     pageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'>|null $certificateStatuses
 * @property bool|null $includeCertificateDetails
 * @property string|null $certificateName
 * @property string|null $pageToken
 */
class GetCertificatesRequest extends Request
{
    /**
     * @param array{
     *     certificateStatuses?: list<'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'>|null,
     *     includeCertificateDetails?: bool|null,
     *     certificateName?: string|null,
     *     pageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

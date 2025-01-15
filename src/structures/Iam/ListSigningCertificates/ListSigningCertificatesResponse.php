<?php

namespace Sunaoka\Aws\Structures\Iam\ListSigningCertificates;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SigningCertificate> $Certificates
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 */
class ListSigningCertificatesResponse extends Response
{
}

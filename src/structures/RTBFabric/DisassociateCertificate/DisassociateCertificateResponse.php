<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DisassociateCertificate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property string $acmCertificateArn
 * @property 'PENDING_ASSOCIATION'|'ASSOCIATED'|'PENDING_DISASSOCIATION'|'DISASSOCIATED'|'FAILED' $status
 */
class DisassociateCertificateResponse extends Response
{
}

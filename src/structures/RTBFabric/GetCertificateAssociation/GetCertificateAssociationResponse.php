<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetCertificateAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property string $acmCertificateArn
 * @property 'PENDING_ASSOCIATION'|'ASSOCIATED'|'PENDING_DISASSOCIATION'|'DISASSOCIATED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult|null $associatedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetCertificateAssociationResponse extends Response
{
}

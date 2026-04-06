<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string $Id
 * @property string $Arn
 * @property string $OtherParticipantAccountId
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property array<'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY', Shapes\ConnectionTypeDetail> $ConnectionTypes
 */
class GetConnectionResponse extends Response
{
}

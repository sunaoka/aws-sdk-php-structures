<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CancelConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string $Id
 * @property string $Arn
 * @property string $OtherParticipantAccountId
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property array<'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY', Shapes\ConnectionTypeDetail> $ConnectionTypes
 */
class CancelConnectionResponse extends Response
{
}

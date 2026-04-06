<?php

namespace Sunaoka\Aws\Structures\DataExchange\AcceptDataGrant;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string|null $SenderPrincipal
 * @property string $ReceiverPrincipal
 * @property string|null $Description
 * @property 'PENDING_RECEIVER_ACCEPTANCE'|'ACCEPTED' $AcceptanceState
 * @property \Aws\Api\DateTimeResult|null $AcceptedAt
 * @property \Aws\Api\DateTimeResult|null $EndsAt
 * @property 'AWS_ORGANIZATION'|'NONE' $GrantDistributionScope
 * @property string $DataSetId
 * @property string $Id
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class AcceptDataGrantResponse extends Response
{
}

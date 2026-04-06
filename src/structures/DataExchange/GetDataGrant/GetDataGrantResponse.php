<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetDataGrant;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $SenderPrincipal
 * @property string $ReceiverPrincipal
 * @property string|null $Description
 * @property 'PENDING_RECEIVER_ACCEPTANCE'|'ACCEPTED' $AcceptanceState
 * @property \Aws\Api\DateTimeResult|null $AcceptedAt
 * @property \Aws\Api\DateTimeResult|null $EndsAt
 * @property 'AWS_ORGANIZATION'|'NONE' $GrantDistributionScope
 * @property string $DataSetId
 * @property string $SourceDataSetId
 * @property string $Id
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property array<string, string>|null $Tags
 */
class GetDataGrantResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainName
 * @property int $DefaultExpirationDays
 * @property string $DefaultEncryptionKey
 * @property string $DeadLetterQueueUrl
 * @property Shapes\MatchingResponse $Matching
 * @property Shapes\RuleBasedMatchingResponse $RuleBasedMatching
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string> $Tags
 */
class UpdateDomainResponse extends Response
{
}

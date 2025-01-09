<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainName
 * @property int<1, 1098> $DefaultExpirationDays
 * @property string $DefaultEncryptionKey
 * @property string $DeadLetterQueueUrl
 * @property Shapes\MatchingResponse $Matching
 * @property Shapes\RuleBasedMatchingResponse $RuleBasedMatching
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string> $Tags
 */
class CreateDomainResponse extends Response
{
}

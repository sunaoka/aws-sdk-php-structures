<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainName
 * @property int<1, 1098>|null $DefaultExpirationDays
 * @property string|null $DefaultEncryptionKey
 * @property string|null $DeadLetterQueueUrl
 * @property Shapes\DomainStats|null $Stats
 * @property Shapes\MatchingResponse|null $Matching
 * @property Shapes\RuleBasedMatchingResponse|null $RuleBasedMatching
 * @property Shapes\DataStoreResponse|null $DataStore
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class GetDomainResponse extends Response
{
}

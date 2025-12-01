<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int<1, 1098> $DefaultExpirationDays
 * @property string|null $DefaultEncryptionKey
 * @property string|null $DeadLetterQueueUrl
 * @property Shapes\MatchingRequest|null $Matching
 * @property Shapes\RuleBasedMatchingRequest|null $RuleBasedMatching
 * @property Shapes\DataStoreRequest|null $DataStore
 * @property array<string, string>|null $Tags
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DefaultExpirationDays: int<1, 1098>,
     *     DefaultEncryptionKey?: string|null,
     *     DeadLetterQueueUrl?: string|null,
     *     Matching?: Shapes\MatchingRequest|null,
     *     RuleBasedMatching?: Shapes\RuleBasedMatchingRequest|null,
     *     DataStore?: Shapes\DataStoreRequest|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

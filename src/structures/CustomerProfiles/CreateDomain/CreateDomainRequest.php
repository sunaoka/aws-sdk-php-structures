<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int<1, 1098> $DefaultExpirationDays
 * @property string $DefaultEncryptionKey
 * @property string $DeadLetterQueueUrl
 * @property Shapes\MatchingRequest $Matching
 * @property Shapes\RuleBasedMatchingRequest $RuleBasedMatching
 * @property array<string, string> $Tags
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DefaultExpirationDays: int<1, 1098>,
     *     DefaultEncryptionKey?: string,
     *     DeadLetterQueueUrl?: string,
     *     Matching?: Shapes\MatchingRequest,
     *     RuleBasedMatching?: Shapes\RuleBasedMatchingRequest,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

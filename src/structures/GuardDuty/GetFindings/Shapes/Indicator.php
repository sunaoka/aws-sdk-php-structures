<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUSPICIOUS_USER_AGENT'|'SUSPICIOUS_NETWORK'|'MALICIOUS_IP'|'TOR_IP'|'ATTACK_TACTIC'|'HIGH_RISK_API'|'ATTACK_TECHNIQUE'|'UNUSUAL_API_FOR_ACCOUNT'|'UNUSUAL_ASN_FOR_ACCOUNT'|'UNUSUAL_ASN_FOR_USER' $Key
 * @property list<string>|null $Values
 * @property string|null $Title
 */
class Indicator extends Shape
{
    /**
     * @param array{
     *     Key: 'SUSPICIOUS_USER_AGENT'|'SUSPICIOUS_NETWORK'|'MALICIOUS_IP'|'TOR_IP'|'ATTACK_TACTIC'|'HIGH_RISK_API'|'ATTACK_TECHNIQUE'|'UNUSUAL_API_FOR_ACCOUNT'|'UNUSUAL_ASN_FOR_ACCOUNT'|'UNUSUAL_ASN_FOR_USER',
     *     Values?: list<string>|null,
     *     Title?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

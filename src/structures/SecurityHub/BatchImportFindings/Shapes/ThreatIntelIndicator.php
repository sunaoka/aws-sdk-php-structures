<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOMAIN'|'EMAIL_ADDRESS'|'HASH_MD5'|'HASH_SHA1'|'HASH_SHA256'|'HASH_SHA512'|'IPV4_ADDRESS'|'IPV6_ADDRESS'|'MUTEX'|'PROCESS'|'URL'|null $Type
 * @property string|null $Value
 * @property 'BACKDOOR'|'CARD_STEALER'|'COMMAND_AND_CONTROL'|'DROP_SITE'|'EXPLOIT_SITE'|'KEYLOGGER'|null $Category
 * @property string|null $LastObservedAt
 * @property string|null $Source
 * @property string|null $SourceUrl
 */
class ThreatIntelIndicator extends Shape
{
    /**
     * @param array{
     *     Type?: 'DOMAIN'|'EMAIL_ADDRESS'|'HASH_MD5'|'HASH_SHA1'|'HASH_SHA256'|'HASH_SHA512'|'IPV4_ADDRESS'|'IPV6_ADDRESS'|'MUTEX'|'PROCESS'|'URL'|null,
     *     Value?: string|null,
     *     Category?: 'BACKDOOR'|'CARD_STEALER'|'COMMAND_AND_CONTROL'|'DROP_SITE'|'EXPLOIT_SITE'|'KEYLOGGER'|null,
     *     LastObservedAt?: string|null,
     *     Source?: string|null,
     *     SourceUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

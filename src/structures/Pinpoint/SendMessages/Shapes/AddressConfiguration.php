<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BodyOverride
 * @property 'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP'|null $ChannelType
 * @property array<string, string>|null $Context
 * @property string|null $RawContent
 * @property array<string, list<string>>|null $Substitutions
 * @property string|null $TitleOverride
 */
class AddressConfiguration extends Shape
{
    /**
     * @param array{
     *     BodyOverride?: string|null,
     *     ChannelType?: 'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP'|null,
     *     Context?: array<string, string>|null,
     *     RawContent?: string|null,
     *     Substitutions?: array<string, list<string>>|null,
     *     TitleOverride?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

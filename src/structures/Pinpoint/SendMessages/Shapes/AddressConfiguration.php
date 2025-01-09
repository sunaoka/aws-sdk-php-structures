<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BodyOverride
 * @property 'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP' $ChannelType
 * @property array<string, string> $Context
 * @property string $RawContent
 * @property array<string, list<string>> $Substitutions
 * @property string $TitleOverride
 */
class AddressConfiguration extends Shape
{
    /**
     * @param array{
     *     BodyOverride?: string,
     *     ChannelType?: 'PUSH'|'GCM'|'APNS'|'APNS_SANDBOX'|'APNS_VOIP'|'APNS_VOIP_SANDBOX'|'ADM'|'SMS'|'VOICE'|'EMAIL'|'BAIDU'|'CUSTOM'|'IN_APP',
     *     Context?: array<string, string>,
     *     RawContent?: string,
     *     Substitutions?: array<string, list<string>>,
     *     TitleOverride?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

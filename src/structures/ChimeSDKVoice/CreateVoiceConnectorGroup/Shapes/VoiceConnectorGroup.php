<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceConnectorGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceConnectorGroupId
 * @property string $Name
 * @property list<VoiceConnectorItem> $VoiceConnectorItems
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property string $VoiceConnectorGroupArn
 */
class VoiceConnectorGroup extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorGroupId?: string,
     *     Name?: string,
     *     VoiceConnectorItems?: list<VoiceConnectorItem>,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     VoiceConnectorGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

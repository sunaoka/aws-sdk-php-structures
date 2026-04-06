<?php

namespace Sunaoka\Aws\Structures\Chime\ListVoiceConnectorGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VoiceConnectorGroupId
 * @property string|null $Name
 * @property list<VoiceConnectorItem>|null $VoiceConnectorItems
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property string|null $VoiceConnectorGroupArn
 */
class VoiceConnectorGroup extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorGroupId?: string|null,
     *     Name?: string|null,
     *     VoiceConnectorItems?: list<VoiceConnectorItem>|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     VoiceConnectorGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

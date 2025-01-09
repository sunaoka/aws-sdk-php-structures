<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetSipMediaApplicationAlexaSkillConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE' $AlexaSkillStatus
 * @property list<string> $AlexaSkillIds
 */
class SipMediaApplicationAlexaSkillConfiguration extends Shape
{
    /**
     * @param array{
     *     AlexaSkillStatus: 'ACTIVE'|'INACTIVE',
     *     AlexaSkillIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

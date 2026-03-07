<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VOICE_CALL'|'CHAT'|null $Type
 * @property VoiceCallEntryPointParameters|null $VoiceCallEntryPointParameters
 * @property ChatEntryPointParameters|null $ChatEntryPointParameters
 */
class TestCaseEntryPoint extends Shape
{
    /**
     * @param array{
     *     Type?: 'VOICE_CALL'|'CHAT'|null,
     *     VoiceCallEntryPointParameters?: VoiceCallEntryPointParameters|null,
     *     ChatEntryPointParameters?: ChatEntryPointParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

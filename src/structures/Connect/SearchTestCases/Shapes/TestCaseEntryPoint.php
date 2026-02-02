<?php

namespace Sunaoka\Aws\Structures\Connect\SearchTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VOICE_CALL'|null $Type
 * @property VoiceCallEntryPointParameters|null $VoiceCallEntryPointParameters
 */
class TestCaseEntryPoint extends Shape
{
    /**
     * @param array{
     *     Type?: 'VOICE_CALL'|null,
     *     VoiceCallEntryPointParameters?: VoiceCallEntryPointParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

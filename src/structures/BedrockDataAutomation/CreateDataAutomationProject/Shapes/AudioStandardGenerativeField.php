<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $state
 * @property list<'AUDIO_SUMMARY'|'IAB'|'TOPIC_SUMMARY'>|null $types
 */
class AudioStandardGenerativeField extends Shape
{
    /**
     * @param array{
     *     state: 'ENABLED'|'DISABLED',
     *     types?: list<'AUDIO_SUMMARY'|'IAB'|'TOPIC_SUMMARY'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SMART_CROP'|'SMART_SUBTITLE'>|null $Features
 * @property list<ElementalInferenceFeed>|null $Feeds
 */
class ElementalInferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     Features?: list<'SMART_CROP'|'SMART_SUBTITLE'>|null,
     *     Feeds?: list<ElementalInferenceFeed>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

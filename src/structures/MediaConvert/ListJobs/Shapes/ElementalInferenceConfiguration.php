<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SMART_CROP'>|null $Features
 * @property list<ElementalInferenceFeed>|null $Feeds
 */
class ElementalInferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     Features?: list<'SMART_CROP'>|null,
     *     Feeds?: list<ElementalInferenceFeed>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

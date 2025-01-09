<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $state
 * @property list<'CONTENT_MODERATION'|'TEXT_DETECTION'> $types
 */
class ImageExtractionCategory extends Shape
{
    /**
     * @param array{
     *     state: 'ENABLED'|'DISABLED',
     *     types?: list<'CONTENT_MODERATION'|'TEXT_DETECTION'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $state
 * @property list<'IMAGE_SUMMARY'|'IAB'>|null $types
 */
class ImageStandardGenerativeField extends Shape
{
    /**
     * @param array{
     *     state: 'ENABLED'|'DISABLED',
     *     types?: list<'IMAGE_SUMMARY'|'IAB'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property ConditionalFormattingCustomIconOptions $IconOptions
 * @property string|null $Color
 * @property ConditionalFormattingIconDisplayConfiguration|null $DisplayConfiguration
 */
class ConditionalFormattingCustomIconCondition extends Shape
{
    /**
     * @param array{
     *     Expression: string,
     *     IconOptions: ConditionalFormattingCustomIconOptions,
     *     Color?: string|null,
     *     DisplayConfiguration?: ConditionalFormattingIconDisplayConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property ConditionalFormattingCustomIconOptions $IconOptions
 * @property string $Color
 * @property ConditionalFormattingIconDisplayConfiguration $DisplayConfiguration
 */
class ConditionalFormattingCustomIconCondition extends Shape
{
    /**
     * @param array{
     *     Expression: string,
     *     IconOptions: ConditionalFormattingCustomIconOptions,
     *     Color?: string,
     *     DisplayConfiguration?: ConditionalFormattingIconDisplayConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

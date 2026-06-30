<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactConversationalAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LanguageLocale
 */
class LanguageConfiguration extends Shape
{
    /**
     * @param array{LanguageLocale?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LanguageCode
 * @property string $Name
 * @property CaptionSelectorSettings|null $SelectorSettings
 */
class CaptionSelector extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: string|null,
     *     Name: string,
     *     SelectorSettings?: CaptionSelectorSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

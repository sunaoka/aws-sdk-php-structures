<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DisplayText
 * @property string $Url
 */
class ChoiceContent extends Shape
{
    /**
     * @param array{
     *     DisplayText?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

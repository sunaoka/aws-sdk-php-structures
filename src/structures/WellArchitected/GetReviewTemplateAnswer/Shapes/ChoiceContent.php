<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetReviewTemplateAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DisplayText
 * @property string|null $Url
 */
class ChoiceContent extends Shape
{
    /**
     * @param array{
     *     DisplayText?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

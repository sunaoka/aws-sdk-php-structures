<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetProfileTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChoiceId
 * @property string $ChoiceTitle
 * @property string $ChoiceDescription
 */
class ProfileTemplateChoice extends Shape
{
    /**
     * @param array{
     *     ChoiceId?: string,
     *     ChoiceTitle?: string,
     *     ChoiceDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

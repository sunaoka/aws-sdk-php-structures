<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetProfileTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChoiceId
 * @property string|null $ChoiceTitle
 * @property string|null $ChoiceDescription
 */
class ProfileTemplateChoice extends Shape
{
    /**
     * @param array{
     *     ChoiceId?: string|null,
     *     ChoiceTitle?: string|null,
     *     ChoiceDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

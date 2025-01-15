<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChoiceId
 * @property string|null $ChoiceTitle
 * @property string|null $ChoiceDescription
 */
class ProfileChoice extends Shape
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

<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChoiceId
 * @property string $ChoiceTitle
 * @property string $ChoiceDescription
 */
class ProfileChoice extends Shape
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

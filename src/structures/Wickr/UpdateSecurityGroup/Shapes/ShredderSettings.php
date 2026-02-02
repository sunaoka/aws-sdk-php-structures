<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $canProcessManually
 * @property int|null $intensity
 */
class ShredderSettings extends Shape
{
    /**
     * @param array{
     *     canProcessManually?: bool|null,
     *     intensity?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

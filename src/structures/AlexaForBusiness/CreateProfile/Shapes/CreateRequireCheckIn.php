<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReleaseAfterMinutes
 * @property bool $Enabled
 */
class CreateRequireCheckIn extends Shape
{
    /**
     * @param array{
     *     ReleaseAfterMinutes: int,
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

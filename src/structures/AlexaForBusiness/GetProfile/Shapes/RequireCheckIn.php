<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ReleaseAfterMinutes
 * @property bool|null $Enabled
 */
class RequireCheckIn extends Shape
{
    /**
     * @param array{
     *     ReleaseAfterMinutes?: int|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

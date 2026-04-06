<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VersionId
 * @property string|null $DeviceName
 */
class AdditionalInfo extends Shape
{
    /**
     * @param array{
     *     VersionId?: string|null,
     *     DeviceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MSTeamsChannel|null $opsOncallTarget
 * @property MSTeamsChannel|null $opsSRETarget
 */
class MSTeamsTransmissionTarget extends Shape
{
    /**
     * @param array{
     *     opsOncallTarget?: MSTeamsChannel|null,
     *     opsSRETarget?: MSTeamsChannel|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

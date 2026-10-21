<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $teamId
 * @property string $teamName
 * @property MSTeamsTransmissionTarget $transmissionTarget
 */
class MSTeamsConfiguration extends Shape
{
    /**
     * @param array{
     *     teamId: string,
     *     teamName: string,
     *     transmissionTarget: MSTeamsTransmissionTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

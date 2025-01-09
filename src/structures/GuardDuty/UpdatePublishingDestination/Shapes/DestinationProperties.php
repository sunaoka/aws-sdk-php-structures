<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdatePublishingDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationArn
 * @property string $KmsKeyArn
 */
class DestinationProperties extends Shape
{
    /**
     * @param array{
     *     DestinationArn?: string,
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

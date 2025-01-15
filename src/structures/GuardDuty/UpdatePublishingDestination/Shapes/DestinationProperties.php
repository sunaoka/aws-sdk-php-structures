<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdatePublishingDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationArn
 * @property string|null $KmsKeyArn
 */
class DestinationProperties extends Shape
{
    /**
     * @param array{
     *     DestinationArn?: string|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

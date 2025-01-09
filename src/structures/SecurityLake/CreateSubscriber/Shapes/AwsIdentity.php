<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $externalId
 * @property string $principal
 */
class AwsIdentity extends Shape
{
    /**
     * @param array{
     *     externalId: string,
     *     principal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

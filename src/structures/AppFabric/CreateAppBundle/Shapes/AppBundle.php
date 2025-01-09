<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateAppBundle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $customerManagedKeyArn
 */
class AppBundle extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     customerManagedKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetAppBundle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $customerManagedKeyArn
 */
class AppBundle extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     customerManagedKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

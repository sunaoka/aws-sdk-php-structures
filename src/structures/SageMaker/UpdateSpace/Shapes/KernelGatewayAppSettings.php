<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec|null $DefaultResourceSpec
 * @property list<CustomImage>|null $CustomImages
 * @property list<string>|null $LifecycleConfigArns
 */
class KernelGatewayAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec|null,
     *     CustomImages?: list<CustomImage>|null,
     *     LifecycleConfigArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

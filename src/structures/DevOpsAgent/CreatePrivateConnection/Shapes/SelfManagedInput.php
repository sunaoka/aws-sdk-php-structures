<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreatePrivateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceConfigurationId
 * @property string|null $certificate
 */
class SelfManagedInput extends Shape
{
    /**
     * @param array{
     *     resourceConfigurationId: string,
     *     certificate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

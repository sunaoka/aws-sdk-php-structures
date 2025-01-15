<?php

namespace Sunaoka\Aws\Structures\EKS\DeregisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $resources
 * @property Provider|null $provider
 */
class EncryptionConfig extends Shape
{
    /**
     * @param array{
     *     resources?: list<string>|null,
     *     provider?: Provider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

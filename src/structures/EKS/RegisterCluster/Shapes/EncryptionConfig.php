<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $resources
 * @property Provider $provider
 */
class EncryptionConfig extends Shape
{
    /**
     * @param array{
     *     resources?: list<string>,
     *     provider?: Provider
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $vpceIds
 */
class ArgoCdNetworkAccessConfigRequest extends Shape
{
    /**
     * @param array{vpceIds?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

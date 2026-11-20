<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketOwnerAccountId
 */
class S3SourceConfiguration extends Shape
{
    /**
     * @param array{bucketOwnerAccountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

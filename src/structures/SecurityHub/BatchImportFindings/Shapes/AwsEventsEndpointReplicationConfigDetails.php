<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $State
 */
class AwsEventsEndpointReplicationConfigDetails extends Shape
{
    /**
     * @param array{State?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

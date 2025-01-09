<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Resources
 * @property list<string> $ResourceTypes
 */
class ResourceStatementRequest extends Shape
{
    /**
     * @param array{
     *     Resources?: list<string>,
     *     ResourceTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

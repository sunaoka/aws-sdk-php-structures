<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Resources
 * @property list<string>|null $ResourceTypes
 */
class ResourceStatementRequest extends Shape
{
    /**
     * @param array{
     *     Resources?: list<string>|null,
     *     ResourceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

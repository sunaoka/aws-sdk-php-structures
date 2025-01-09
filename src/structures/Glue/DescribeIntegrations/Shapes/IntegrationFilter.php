<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Values
 */
class IntegrationFilter extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

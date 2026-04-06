<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'integration-arn'|'source-arn'|'source-types'|'status' $Name
 * @property list<string> $Values
 */
class DescribeIntegrationsFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'integration-arn'|'source-arn'|'source-types'|'status',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'BASIC'|'OAUTH2'|'CUSTOM'|'IAM'> $SupportedAuthenticationTypes
 * @property list<'READ'|'WRITE'> $SupportedDataOperations
 * @property list<'SPARK'|'ATHENA'|'PYTHON'> $SupportedComputeEnvironments
 */
class Capabilities extends Shape
{
    /**
     * @param array{
     *     SupportedAuthenticationTypes: list<'BASIC'|'OAUTH2'|'CUSTOM'|'IAM'>,
     *     SupportedDataOperations: list<'READ'|'WRITE'>,
     *     SupportedComputeEnvironments: list<'SPARK'|'ATHENA'|'PYTHON'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

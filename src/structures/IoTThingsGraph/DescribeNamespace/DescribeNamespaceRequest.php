<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DescribeNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $namespaceName
 */
class DescribeNamespaceRequest extends Request
{
    /**
     * @param array{namespaceName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

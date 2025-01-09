<?php

namespace Sunaoka\Aws\Structures\AppSync\StartDataSourceIntrospection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RdsDataApiConfig $rdsDataApiConfig
 */
class StartDataSourceIntrospectionRequest extends Request
{
    /**
     * @param array{rdsDataApiConfig?: Shapes\RdsDataApiConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

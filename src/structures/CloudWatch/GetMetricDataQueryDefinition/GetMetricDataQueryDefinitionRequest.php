<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricDataQueryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetMetricDataQueryDefinitionRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

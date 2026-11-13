<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteMetricDataQueryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteMetricDataQueryDefinitionRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

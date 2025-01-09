<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRunProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RunId
 */
class GetWorkflowRunPropertiesRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\StartWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property array<string, string>|null $RunProperties
 */
class StartWorkflowRunRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RunProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

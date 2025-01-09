<?php

namespace Sunaoka\Aws\Structures\Glue\PutWorkflowRunProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RunId
 * @property array<string, string> $RunProperties
 */
class PutWorkflowRunPropertiesRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RunId: string,
     *     RunProperties: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteQueryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryDefinitionId
 */
class DeleteQueryDefinitionRequest extends Request
{
    /**
     * @param array{queryDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

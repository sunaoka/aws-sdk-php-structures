<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteLoggerDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoggerDefinitionId
 */
class DeleteLoggerDefinitionRequest extends Request
{
    /**
     * @param array{LoggerDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetLoggerDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoggerDefinitionId
 */
class GetLoggerDefinitionRequest extends Request
{
    /**
     * @param array{LoggerDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

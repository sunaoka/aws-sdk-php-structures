<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateLoggerDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoggerDefinitionId
 * @property string $Name
 */
class UpdateLoggerDefinitionRequest extends Request
{
    /**
     * @param array{
     *     LoggerDefinitionId: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

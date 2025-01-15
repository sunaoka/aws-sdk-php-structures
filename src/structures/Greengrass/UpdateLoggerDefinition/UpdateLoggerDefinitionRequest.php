<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateLoggerDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoggerDefinitionId
 * @property string|null $Name
 */
class UpdateLoggerDefinitionRequest extends Request
{
    /**
     * @param array{
     *     LoggerDefinitionId: string,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

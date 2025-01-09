<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateLoggerDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property string $LoggerDefinitionId
 * @property list<Shapes\Logger> $Loggers
 */
class CreateLoggerDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     LoggerDefinitionId: string,
     *     Loggers?: list<Shapes\Logger>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

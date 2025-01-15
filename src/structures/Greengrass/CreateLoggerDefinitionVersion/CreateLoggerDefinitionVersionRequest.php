<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateLoggerDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property string $LoggerDefinitionId
 * @property list<Shapes\Logger>|null $Loggers
 */
class CreateLoggerDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     LoggerDefinitionId: string,
     *     Loggers?: list<Shapes\Logger>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

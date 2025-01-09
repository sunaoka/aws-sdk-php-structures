<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetLoggerDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoggerDefinitionId
 * @property string $LoggerDefinitionVersionId
 * @property string $NextToken
 */
class GetLoggerDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     LoggerDefinitionId: string,
     *     LoggerDefinitionVersionId: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

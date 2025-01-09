<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListLoggerDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoggerDefinitionId
 * @property string $MaxResults
 * @property string $NextToken
 */
class ListLoggerDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     LoggerDefinitionId: string,
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

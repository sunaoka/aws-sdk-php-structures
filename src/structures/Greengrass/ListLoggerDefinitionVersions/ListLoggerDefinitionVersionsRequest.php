<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListLoggerDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoggerDefinitionId
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class ListLoggerDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     LoggerDefinitionId: string,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

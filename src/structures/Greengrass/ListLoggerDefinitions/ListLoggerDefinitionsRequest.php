<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListLoggerDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MaxResults
 * @property string $NextToken
 */
class ListLoggerDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\ListTriggers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property string $DependentJobName
 * @property int $MaxResults
 * @property array<string, string> $Tags
 */
class ListTriggersRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     DependentJobName?: string,
     *     MaxResults?: int,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

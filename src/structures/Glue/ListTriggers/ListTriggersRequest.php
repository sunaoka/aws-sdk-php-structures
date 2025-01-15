<?php

namespace Sunaoka\Aws\Structures\Glue\ListTriggers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string|null $DependentJobName
 * @property int<1, 200>|null $MaxResults
 * @property array<string, string>|null $Tags
 */
class ListTriggersRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     DependentJobName?: string|null,
     *     MaxResults?: int<1, 200>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

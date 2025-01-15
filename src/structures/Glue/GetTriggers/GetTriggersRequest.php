<?php

namespace Sunaoka\Aws\Structures\Glue\GetTriggers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string|null $DependentJobName
 * @property int<1, 200>|null $MaxResults
 */
class GetTriggersRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     DependentJobName?: string|null,
     *     MaxResults?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\GetTriggers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property string $DependentJobName
 * @property int<1, 200> $MaxResults
 */
class GetTriggersRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     DependentJobName?: string,
     *     MaxResults?: int<1, 200>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

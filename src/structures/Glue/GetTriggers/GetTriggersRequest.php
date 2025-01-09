<?php

namespace Sunaoka\Aws\Structures\Glue\GetTriggers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property string $DependentJobName
 * @property int $MaxResults
 */
class GetTriggersRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     DependentJobName?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

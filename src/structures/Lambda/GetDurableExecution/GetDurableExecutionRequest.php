<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DurableExecutionArn
 * @property bool|null $IncludeExecutionData
 */
class GetDurableExecutionRequest extends Request
{
    /**
     * @param array{
     *     DurableExecutionArn: string,
     *     IncludeExecutionData?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

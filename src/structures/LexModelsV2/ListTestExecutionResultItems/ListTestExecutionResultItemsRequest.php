<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testExecutionId
 * @property Shapes\TestExecutionResultFilterBy $resultFilterBy
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListTestExecutionResultItemsRequest extends Request
{
    /**
     * @param array{
     *     testExecutionId: string,
     *     resultFilterBy: Shapes\TestExecutionResultFilterBy,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

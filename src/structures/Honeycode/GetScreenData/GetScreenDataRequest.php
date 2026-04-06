<?php

namespace Sunaoka\Aws\Structures\Honeycode\GetScreenData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workbookId
 * @property string $appId
 * @property string $screenId
 * @property array<string, Shapes\VariableValue>|null $variables
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class GetScreenDataRequest extends Request
{
    /**
     * @param array{
     *     workbookId: string,
     *     appId: string,
     *     screenId: string,
     *     variables?: array<string, Shapes\VariableValue>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

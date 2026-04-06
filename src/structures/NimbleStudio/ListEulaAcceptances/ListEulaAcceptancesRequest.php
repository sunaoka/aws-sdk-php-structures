<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListEulaAcceptances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $eulaIds
 * @property string|null $nextToken
 * @property string $studioId
 */
class ListEulaAcceptancesRequest extends Request
{
    /**
     * @param array{
     *     eulaIds?: list<string>|null,
     *     nextToken?: string|null,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

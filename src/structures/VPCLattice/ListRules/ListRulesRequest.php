<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $listenerIdentifier
 * @property int $maxResults
 * @property string $nextToken
 * @property string $serviceIdentifier
 */
class ListRulesRequest extends Request
{
    /**
     * @param array{
     *     listenerIdentifier: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     serviceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

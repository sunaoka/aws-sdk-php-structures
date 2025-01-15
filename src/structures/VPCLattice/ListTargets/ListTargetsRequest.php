<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $targetGroupIdentifier
 * @property list<Shapes\Target>|null $targets
 */
class ListTargetsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     targetGroupIdentifier: string,
     *     targets?: list<Shapes\Target>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

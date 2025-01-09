<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $targetGroupIdentifier
 * @property list<Shapes\Target> $targets
 */
class ListTargetsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     targetGroupIdentifier: string,
     *     targets?: list<Shapes\Target>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

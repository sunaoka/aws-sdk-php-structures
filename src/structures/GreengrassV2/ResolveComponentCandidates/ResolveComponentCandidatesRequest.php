<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ResolveComponentCandidates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ComponentPlatform|null $platform
 * @property list<Shapes\ComponentCandidate>|null $componentCandidates
 */
class ResolveComponentCandidatesRequest extends Request
{
    /**
     * @param array{
     *     platform?: Shapes\ComponentPlatform|null,
     *     componentCandidates?: list<Shapes\ComponentCandidate>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

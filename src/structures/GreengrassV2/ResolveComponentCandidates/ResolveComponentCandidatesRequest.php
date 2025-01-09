<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ResolveComponentCandidates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ComponentPlatform $platform
 * @property list<Shapes\ComponentCandidate> $componentCandidates
 */
class ResolveComponentCandidatesRequest extends Request
{
    /**
     * @param array{
     *     platform?: Shapes\ComponentPlatform,
     *     componentCandidates?: list<Shapes\ComponentCandidate>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

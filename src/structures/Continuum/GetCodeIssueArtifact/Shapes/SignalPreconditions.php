<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SignalPrecondition|null $reachableFromAttacker
 * @property SignalPrecondition|null $configurationNeeded
 * @property SignalAccessPrecondition|null $accessLevel
 * @property SignalPrecondition|null $userInteractionRequired
 */
class SignalPreconditions extends Shape
{
    /**
     * @param array{
     *     reachableFromAttacker?: SignalPrecondition|null,
     *     configurationNeeded?: SignalPrecondition|null,
     *     accessLevel?: SignalAccessPrecondition|null,
     *     userInteractionRequired?: SignalPrecondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Rule
 * @property string|null $EventBusName
 * @property list<Shapes\Target> $Targets
 */
class PutTargetsRequest extends Request
{
    /**
     * @param array{
     *     Rule: string,
     *     EventBusName?: string|null,
     *     Targets: list<Shapes\Target>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

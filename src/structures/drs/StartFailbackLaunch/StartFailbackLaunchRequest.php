<?php

namespace Sunaoka\Aws\Structures\drs\StartFailbackLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $recoveryInstanceIDs
 * @property array<string, string>|null $tags
 */
class StartFailbackLaunchRequest extends Request
{
    /**
     * @param array{
     *     recoveryInstanceIDs: list<string>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EventBridge\RemoveTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Rule
 * @property string $EventBusName
 * @property list<string> $Ids
 * @property bool $Force
 */
class RemoveTargetsRequest extends Request
{
    /**
     * @param array{
     *     Rule: string,
     *     EventBusName?: string,
     *     Ids: list<string>,
     *     Force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

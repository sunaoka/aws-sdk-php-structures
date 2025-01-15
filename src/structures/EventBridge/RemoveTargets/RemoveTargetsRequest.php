<?php

namespace Sunaoka\Aws\Structures\EventBridge\RemoveTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Rule
 * @property string|null $EventBusName
 * @property list<string> $Ids
 * @property bool|null $Force
 */
class RemoveTargetsRequest extends Request
{
    /**
     * @param array{
     *     Rule: string,
     *     EventBusName?: string|null,
     *     Ids: list<string>,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

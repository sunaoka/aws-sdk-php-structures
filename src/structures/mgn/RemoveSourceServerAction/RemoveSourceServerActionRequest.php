<?php

namespace Sunaoka\Aws\Structures\mgn\RemoveSourceServerAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property string $actionID
 * @property string|null $accountID
 */
class RemoveSourceServerActionRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     actionID: string,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

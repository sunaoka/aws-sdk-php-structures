<?php

namespace Sunaoka\Aws\Structures\mgn\RemoveSourceServerAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string $actionID
 * @property string $sourceServerID
 */
class RemoveSourceServerActionRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     actionID: string,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\mgn\StartTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $sourceServerIDs
 * @property array<string, string>|null $tags
 * @property string|null $accountID
 */
class StartTestRequest extends Request
{
    /**
     * @param array{
     *     sourceServerIDs: list<string>,
     *     tags?: array<string, string>|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\mgn\StartCutover;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property list<string> $sourceServerIDs
 * @property array<string, string>|null $tags
 */
class StartCutoverRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     sourceServerIDs: list<string>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\mgn\TerminateTargetInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property list<string> $sourceServerIDs
 * @property array<string, string> $tags
 */
class TerminateTargetInstancesRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     sourceServerIDs: list<string>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateScopeSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeIdentifier
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateScopeSnapshotRequest extends Request
{
    /**
     * @param array{
     *     scopeIdentifier: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

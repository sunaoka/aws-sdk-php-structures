<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateTemplateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateIdentifier
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateTemplateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     templateIdentifier: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

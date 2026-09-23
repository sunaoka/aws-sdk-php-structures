<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateRuleSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleIdentifier
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateRuleSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ruleIdentifier: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

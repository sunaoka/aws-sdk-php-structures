<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListRuleSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListRuleSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     ruleIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

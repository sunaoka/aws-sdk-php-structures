<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicyTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $nextToken
 * @property int<1, max> $maxResults
 */
class ListPolicyTemplatesRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

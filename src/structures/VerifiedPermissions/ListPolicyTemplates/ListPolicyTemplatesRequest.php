<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicyTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 */
class ListPolicyTemplatesRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

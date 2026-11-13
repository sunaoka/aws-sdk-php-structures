<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListResourcePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListResourcePoliciesRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

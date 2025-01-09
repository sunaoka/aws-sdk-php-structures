<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecretVersionIds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property bool $IncludeDeprecated
 */
class ListSecretVersionIdsRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     IncludeDeprecated?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

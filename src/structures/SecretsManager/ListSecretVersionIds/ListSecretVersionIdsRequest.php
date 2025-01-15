<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecretVersionIds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $IncludeDeprecated
 */
class ListSecretVersionIdsRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     IncludeDeprecated?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

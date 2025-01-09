<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecretVersionIds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $IncludeDeprecated
 */
class ListSecretVersionIdsRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     IncludeDeprecated?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

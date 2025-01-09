<?php

namespace Sunaoka\Aws\Structures\SecretsManager\BatchGetSecretValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $SecretIdList
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class BatchGetSecretValueRequest extends Request
{
    /**
     * @param array{
     *     SecretIdList?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecretsManager\BatchGetSecretValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $SecretIdList
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 */
class BatchGetSecretValueRequest extends Request
{
    /**
     * @param array{
     *     SecretIdList?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

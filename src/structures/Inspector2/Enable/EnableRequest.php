<?php

namespace Sunaoka\Aws\Structures\Inspector2\Enable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 * @property string|null $clientToken
 * @property list<'EC2'|'ECR'|'LAMBDA'|'LAMBDA_CODE'> $resourceTypes
 */
class EnableRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     clientToken?: string|null,
     *     resourceTypes: list<'EC2'|'ECR'|'LAMBDA'|'LAMBDA_CODE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

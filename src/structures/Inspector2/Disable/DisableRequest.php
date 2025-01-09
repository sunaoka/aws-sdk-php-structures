<?php

namespace Sunaoka\Aws\Structures\Inspector2\Disable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property list<'EC2'|'ECR'|'LAMBDA'|'LAMBDA_CODE'> $resourceTypes
 */
class DisableRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     resourceTypes?: list<'EC2'|'ECR'|'LAMBDA'|'LAMBDA_CODE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

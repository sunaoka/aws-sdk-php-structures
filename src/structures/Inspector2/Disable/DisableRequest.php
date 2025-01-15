<?php

namespace Sunaoka\Aws\Structures\Inspector2\Disable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 * @property list<'EC2'|'ECR'|'LAMBDA'|'LAMBDA_CODE'>|null $resourceTypes
 */
class DisableRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     resourceTypes?: list<'EC2'|'ECR'|'LAMBDA'|'LAMBDA_CODE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

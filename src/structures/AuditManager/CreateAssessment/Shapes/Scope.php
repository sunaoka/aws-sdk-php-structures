<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AWSAccount> $awsAccounts
 * @property list<AWSService> $awsServices
 */
class Scope extends Shape
{
    /**
     * @param array{
     *     awsAccounts?: list<AWSAccount>,
     *     awsServices?: list<AWSService>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

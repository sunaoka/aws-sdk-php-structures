<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AWSAccount>|null $awsAccounts
 * @property list<AWSService>|null $awsServices
 */
class Scope extends Shape
{
    /**
     * @param array{
     *     awsAccounts?: list<AWSAccount>|null,
     *     awsServices?: list<AWSService>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

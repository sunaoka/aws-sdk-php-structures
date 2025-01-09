<?php

namespace Sunaoka\Aws\Structures\Artifact\ListCustomerAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $id
 * @property string $agreementArn
 * @property string $awsAccountId
 * @property string $organizationArn
 * @property \Aws\Api\DateTimeResult $effectiveStart
 * @property \Aws\Api\DateTimeResult $effectiveEnd
 * @property 'ACTIVE'|'CUSTOMER_TERMINATED'|'AWS_TERMINATED' $state
 * @property string $description
 * @property list<string> $acceptanceTerms
 * @property list<string> $terminateTerms
 * @property 'CUSTOM'|'DEFAULT'|'MODIFIED' $type
 */
class CustomerAgreementSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     id?: string,
     *     agreementArn?: string,
     *     awsAccountId?: string,
     *     organizationArn?: string,
     *     effectiveStart?: \Aws\Api\DateTimeResult,
     *     effectiveEnd?: \Aws\Api\DateTimeResult,
     *     state?: 'ACTIVE'|'CUSTOMER_TERMINATED'|'AWS_TERMINATED',
     *     description?: string,
     *     acceptanceTerms?: list<string>,
     *     terminateTerms?: list<string>,
     *     type?: 'CUSTOM'|'DEFAULT'|'MODIFIED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

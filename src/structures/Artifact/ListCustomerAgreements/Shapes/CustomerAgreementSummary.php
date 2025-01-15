<?php

namespace Sunaoka\Aws\Structures\Artifact\ListCustomerAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $agreementArn
 * @property string|null $awsAccountId
 * @property string|null $organizationArn
 * @property \Aws\Api\DateTimeResult|null $effectiveStart
 * @property \Aws\Api\DateTimeResult|null $effectiveEnd
 * @property 'ACTIVE'|'CUSTOMER_TERMINATED'|'AWS_TERMINATED'|null $state
 * @property string|null $description
 * @property list<string>|null $acceptanceTerms
 * @property list<string>|null $terminateTerms
 * @property 'CUSTOM'|'DEFAULT'|'MODIFIED'|null $type
 */
class CustomerAgreementSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     id?: string|null,
     *     agreementArn?: string|null,
     *     awsAccountId?: string|null,
     *     organizationArn?: string|null,
     *     effectiveStart?: \Aws\Api\DateTimeResult|null,
     *     effectiveEnd?: \Aws\Api\DateTimeResult|null,
     *     state?: 'ACTIVE'|'CUSTOMER_TERMINATED'|'AWS_TERMINATED'|null,
     *     description?: string|null,
     *     acceptanceTerms?: list<string>|null,
     *     terminateTerms?: list<string>|null,
     *     type?: 'CUSTOM'|'DEFAULT'|'MODIFIED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'>|null $CertificateStatuses
 * @property list<'AWS_MANAGED'|'ACME'|'CUSTOMER_PROVIDED'>|null $CertificateKeyPairOrigins
 * @property list<'N2_AMAZON_MANAGED'|'N2_SFG2_AMAZON_MANAGED'>|null $RootHierarchyTypes
 * @property Shapes\Filters|null $Includes
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxItems
 * @property 'CREATED_AT'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class ListCertificatesRequest extends Request
{
    /**
     * @param array{
     *     CertificateStatuses?: list<'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'>|null,
     *     CertificateKeyPairOrigins?: list<'AWS_MANAGED'|'ACME'|'CUSTOMER_PROVIDED'>|null,
     *     RootHierarchyTypes?: list<'N2_AMAZON_MANAGED'|'N2_SFG2_AMAZON_MANAGED'>|null,
     *     Includes?: Shapes\Filters|null,
     *     NextToken?: string|null,
     *     MaxItems?: int<1, 1000>|null,
     *     SortBy?: 'CREATED_AT'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

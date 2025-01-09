<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'> $CertificateStatuses
 * @property Shapes\Filters $Includes
 * @property string $NextToken
 * @property int<1, 1000> $MaxItems
 * @property 'CREATED_AT' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class ListCertificatesRequest extends Request
{
    /**
     * @param array{
     *     CertificateStatuses?: list<'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'>,
     *     Includes?: Shapes\Filters,
     *     NextToken?: string,
     *     MaxItems?: int<1, 1000>,
     *     SortBy?: 'CREATED_AT',
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

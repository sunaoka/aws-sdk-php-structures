<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'> $CertificateStatuses
 * @property Shapes\Filters $Includes
 * @property string $NextToken
 * @property int $MaxItems
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
     *     MaxItems?: int,
     *     SortBy?: 'CREATED_AT',
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CertificateFilterStatement|null $FilterStatement
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 * @property 'CREATED_AT'|'NOT_AFTER'|'STATUS'|'RENEWAL_STATUS'|'EXPORTED'|'IN_USE'|'NOT_BEFORE'|'KEY_ALGORITHM'|'TYPE'|'CERTIFICATE_ARN'|'COMMON_NAME'|'REVOKED_AT'|'RENEWAL_ELIGIBILITY'|'ISSUED_AT'|'MANAGED_BY'|'EXPORT_OPTION'|'VALIDATION_METHOD'|'IMPORTED_AT'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class SearchCertificatesRequest extends Request
{
    /**
     * @param array{
     *     FilterStatement?: Shapes\CertificateFilterStatement|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null,
     *     SortBy?: 'CREATED_AT'|'NOT_AFTER'|'STATUS'|'RENEWAL_STATUS'|'EXPORTED'|'IN_USE'|'NOT_BEFORE'|'KEY_ALGORITHM'|'TYPE'|'CERTIFICATE_ARN'|'COMMON_NAME'|'REVOKED_AT'|'RENEWAL_ELIGIBILITY'|'ISSUED_AT'|'MANAGED_BY'|'EXPORT_OPTION'|'VALIDATION_METHOD'|'IMPORTED_AT'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

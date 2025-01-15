<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeCustomerMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CustomerAgreement>|null $agreements
 * @property 'v1'|'v2'|'nonPartner'|null $nniPartnerType
 */
class DescribeCustomerMetadataResponse extends Response
{
}

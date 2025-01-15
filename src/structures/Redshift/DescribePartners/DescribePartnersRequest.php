<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribePartners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ClusterIdentifier
 * @property string|null $DatabaseName
 * @property string|null $PartnerName
 */
class DescribePartnersRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ClusterIdentifier: string,
     *     DatabaseName?: string|null,
     *     PartnerName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribePartners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ClusterIdentifier
 * @property string $DatabaseName
 * @property string $PartnerName
 */
class DescribePartnersRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ClusterIdentifier: string,
     *     DatabaseName?: string,
     *     PartnerName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

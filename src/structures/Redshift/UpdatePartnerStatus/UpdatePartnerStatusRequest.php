<?php

namespace Sunaoka\Aws\Structures\Redshift\UpdatePartnerStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ClusterIdentifier
 * @property string $DatabaseName
 * @property string $PartnerName
 * @property 'Active'|'Inactive'|'RuntimeFailure'|'ConnectionFailure' $Status
 * @property string $StatusMessage
 */
class UpdatePartnerStatusRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ClusterIdentifier: string,
     *     DatabaseName: string,
     *     PartnerName: string,
     *     Status: 'Active'|'Inactive'|'RuntimeFailure'|'ConnectionFailure',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

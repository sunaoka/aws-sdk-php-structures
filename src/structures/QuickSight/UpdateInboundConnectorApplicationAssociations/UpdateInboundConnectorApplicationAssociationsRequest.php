<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateInboundConnectorApplicationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $InboundConnectorId
 * @property list<string>|null $AssociateAccessControlApplications
 * @property list<string>|null $DisassociateAccessControlApplications
 */
class UpdateInboundConnectorApplicationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     InboundConnectorId: string,
     *     AssociateAccessControlApplications?: list<string>|null,
     *     DisassociateAccessControlApplications?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

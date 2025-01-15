<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptAddressTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Address
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class AcceptAddressTransferRequest extends Request
{
    /**
     * @param array{
     *     Address: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

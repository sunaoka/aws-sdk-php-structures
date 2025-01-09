<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptAddressTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Address
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class AcceptAddressTransferRequest extends Request
{
    /**
     * @param array{
     *     Address: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

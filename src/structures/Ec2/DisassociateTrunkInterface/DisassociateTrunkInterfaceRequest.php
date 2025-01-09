<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateTrunkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property string $ClientToken
 * @property bool $DryRun
 */
class DisassociateTrunkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     ClientToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateTrunkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class DisassociateTrunkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

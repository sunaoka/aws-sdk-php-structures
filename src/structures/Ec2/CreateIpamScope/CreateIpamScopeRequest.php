<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamId
 * @property string $Description
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 */
class CreateIpamScopeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamId: string,
     *     Description?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

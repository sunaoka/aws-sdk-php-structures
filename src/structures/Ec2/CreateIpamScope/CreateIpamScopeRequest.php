<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamId
 * @property string|null $Description
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property Shapes\ExternalAuthorityConfiguration|null $ExternalAuthorityConfiguration
 */
class CreateIpamScopeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamId: string,
     *     Description?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     ExternalAuthorityConfiguration?: Shapes\ExternalAuthorityConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

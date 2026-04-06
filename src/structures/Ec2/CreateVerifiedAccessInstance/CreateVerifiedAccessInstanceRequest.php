<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property bool|null $FIPSEnabled
 * @property string|null $CidrEndpointsCustomSubDomain
 */
class CreateVerifiedAccessInstanceRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     FIPSEnabled?: bool|null,
     *     CidrEndpointsCustomSubDomain?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

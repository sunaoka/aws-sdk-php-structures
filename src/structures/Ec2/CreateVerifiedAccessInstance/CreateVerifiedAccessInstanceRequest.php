<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 * @property bool $DryRun
 * @property bool $FIPSEnabled
 * @property string $CidrEndpointsCustomSubDomain
 */
class CreateVerifiedAccessInstanceRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken?: string,
     *     DryRun?: bool,
     *     FIPSEnabled?: bool,
     *     CidrEndpointsCustomSubDomain?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

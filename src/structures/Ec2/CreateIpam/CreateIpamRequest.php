<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $Description
 * @property list<Shapes\AddIpamOperatingRegion>|null $OperatingRegions
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property 'free'|'advanced'|null $Tier
 * @property bool|null $EnablePrivateGua
 */
class CreateIpamRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Description?: string|null,
     *     OperatingRegions?: list<Shapes\AddIpamOperatingRegion>|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     Tier?: 'free'|'advanced'|null,
     *     EnablePrivateGua?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

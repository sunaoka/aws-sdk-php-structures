<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $Description
 * @property list<Shapes\AddIpamOperatingRegion> $OperatingRegions
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 * @property 'free'|'advanced' $Tier
 * @property bool $EnablePrivateGua
 */
class CreateIpamRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Description?: string,
     *     OperatingRegions?: list<Shapes\AddIpamOperatingRegion>,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken?: string,
     *     Tier?: 'free'|'advanced',
     *     EnablePrivateGua?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

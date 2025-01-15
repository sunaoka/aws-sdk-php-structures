<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 */
class CreateTrafficMirrorFilterRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

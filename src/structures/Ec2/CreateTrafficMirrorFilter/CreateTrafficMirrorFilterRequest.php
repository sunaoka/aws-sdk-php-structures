<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property string $ClientToken
 */
class CreateTrafficMirrorFilterRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

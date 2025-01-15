<?php

namespace Sunaoka\Aws\Structures\Ec2\DeletePlacementGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $GroupName
 */
class DeletePlacementGroupRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     GroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

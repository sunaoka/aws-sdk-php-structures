<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCoipPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoipPoolId
 * @property bool $DryRun
 */
class DeleteCoipPoolRequest extends Request
{
    /**
     * @param array{
     *     CoipPoolId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

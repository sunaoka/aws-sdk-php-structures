<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetResourcePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESTORE'|null $ActionType
 * @property string $ResourceArn
 */
class GetResourcePermissionRequest extends Request
{
    /**
     * @param array{
     *     ActionType?: 'RESTORE'|null,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

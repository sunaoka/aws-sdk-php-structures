<?php

namespace Sunaoka\Aws\Structures\SsmSap\DeleteResourcePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESTORE'|null $ActionType
 * @property string|null $SourceResourceArn
 * @property string $ResourceArn
 */
class DeleteResourcePermissionRequest extends Request
{
    /**
     * @param array{
     *     ActionType?: 'RESTORE'|null,
     *     SourceResourceArn?: string|null,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

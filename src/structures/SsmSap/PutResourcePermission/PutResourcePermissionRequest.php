<?php

namespace Sunaoka\Aws\Structures\SsmSap\PutResourcePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESTORE' $ActionType
 * @property string $SourceResourceArn
 * @property string $ResourceArn
 */
class PutResourcePermissionRequest extends Request
{
    /**
     * @param array{
     *     ActionType: 'RESTORE',
     *     SourceResourceArn: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

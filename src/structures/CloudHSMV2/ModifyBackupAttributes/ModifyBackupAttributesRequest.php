<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\ModifyBackupAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupId
 * @property bool $NeverExpires
 */
class ModifyBackupAttributesRequest extends Request
{
    /**
     * @param array{
     *     BackupId: string,
     *     NeverExpires: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

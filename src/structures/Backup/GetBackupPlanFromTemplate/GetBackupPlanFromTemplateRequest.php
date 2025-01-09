<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlanFromTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanTemplateId
 */
class GetBackupPlanFromTemplateRequest extends Request
{
    /**
     * @param array{BackupPlanTemplateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Backup\ExportBackupPlanTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanId
 */
class ExportBackupPlanTemplateRequest extends Request
{
    /**
     * @param array{BackupPlanId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

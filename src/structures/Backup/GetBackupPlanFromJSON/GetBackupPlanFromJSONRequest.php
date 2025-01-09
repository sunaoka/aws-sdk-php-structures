<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlanFromJSON;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanTemplateJson
 */
class GetBackupPlanFromJSONRequest extends Request
{
    /**
     * @param array{BackupPlanTemplateJson: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

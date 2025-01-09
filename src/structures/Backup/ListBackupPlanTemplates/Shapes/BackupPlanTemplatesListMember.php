<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlanTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupPlanTemplateId
 * @property string $BackupPlanTemplateName
 */
class BackupPlanTemplatesListMember extends Shape
{
    /**
     * @param array{
     *     BackupPlanTemplateId?: string,
     *     BackupPlanTemplateName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

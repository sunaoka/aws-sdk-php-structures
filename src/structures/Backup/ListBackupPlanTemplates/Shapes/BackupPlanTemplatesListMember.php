<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlanTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackupPlanTemplateId
 * @property string|null $BackupPlanTemplateName
 */
class BackupPlanTemplatesListMember extends Shape
{
    /**
     * @param array{
     *     BackupPlanTemplateId?: string|null,
     *     BackupPlanTemplateName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

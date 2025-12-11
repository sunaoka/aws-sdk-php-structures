<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCapacityManagerDataExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityManagerDataExportId
 * @property bool|null $DryRun
 */
class DeleteCapacityManagerDataExportRequest extends Request
{
    /**
     * @param array{
     *     CapacityManagerDataExportId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

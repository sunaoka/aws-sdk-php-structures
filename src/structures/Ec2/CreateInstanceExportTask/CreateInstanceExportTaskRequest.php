<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property Shapes\ExportToS3TaskSpecification $ExportToS3Task
 * @property string $InstanceId
 * @property 'citrix'|'vmware'|'microsoft' $TargetEnvironment
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateInstanceExportTaskRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     ExportToS3Task: Shapes\ExportToS3TaskSpecification,
     *     InstanceId: string,
     *     TargetEnvironment: 'citrix'|'vmware'|'microsoft',
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

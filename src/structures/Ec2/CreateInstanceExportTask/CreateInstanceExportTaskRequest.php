<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $Description
 * @property string $InstanceId
 * @property 'citrix'|'vmware'|'microsoft' $TargetEnvironment
 * @property Shapes\ExportToS3TaskSpecification $ExportToS3Task
 */
class CreateInstanceExportTaskRequest extends Request
{
    /**
     * @param array{
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     Description?: string|null,
     *     InstanceId: string,
     *     TargetEnvironment: 'citrix'|'vmware'|'microsoft',
     *     ExportToS3Task: Shapes\ExportToS3TaskSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

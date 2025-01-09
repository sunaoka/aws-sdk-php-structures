<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutHypervisorPropertyMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HypervisorArn
 * @property string $IamRoleArn
 * @property list<Shapes\VmwareToAwsTagMapping> $VmwareToAwsTagMappings
 */
class PutHypervisorPropertyMappingsRequest extends Request
{
    /**
     * @param array{
     *     HypervisorArn: string,
     *     IamRoleArn: string,
     *     VmwareToAwsTagMappings: list<Shapes\VmwareToAwsTagMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

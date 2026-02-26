<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutHypervisorPropertyMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HypervisorArn
 * @property list<Shapes\VmwareToAwsTagMapping> $VmwareToAwsTagMappings
 * @property string $IamRoleArn
 */
class PutHypervisorPropertyMappingsRequest extends Request
{
    /**
     * @param array{
     *     HypervisorArn: string,
     *     VmwareToAwsTagMappings: list<Shapes\VmwareToAwsTagMapping>,
     *     IamRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

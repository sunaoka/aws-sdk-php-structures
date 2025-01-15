<?php

namespace Sunaoka\Aws\Structures\Ec2\StartInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property string|null $AdditionalInfo
 * @property bool|null $DryRun
 */
class StartInstancesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds: list<string>,
     *     AdditionalInfo?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

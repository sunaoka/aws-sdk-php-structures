<?php

namespace Sunaoka\Aws\Structures\Ec2\StartInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property string $AdditionalInfo
 * @property bool $DryRun
 */
class StartInstancesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds: list<string>,
     *     AdditionalInfo?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

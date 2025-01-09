<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string $AppId
 * @property list<string> $InstanceIds
 * @property list<string> $LayerIds
 * @property Shapes\DeploymentCommand $Command
 * @property string $Comment
 * @property string $CustomJson
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     AppId?: string,
     *     InstanceIds?: list<string>,
     *     LayerIds?: list<string>,
     *     Command: Shapes\DeploymentCommand,
     *     Comment?: string,
     *     CustomJson?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

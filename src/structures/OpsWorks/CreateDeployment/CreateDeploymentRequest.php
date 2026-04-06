<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string|null $AppId
 * @property list<string>|null $InstanceIds
 * @property list<string>|null $LayerIds
 * @property Shapes\DeploymentCommand $Command
 * @property string|null $Comment
 * @property string|null $CustomJson
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     AppId?: string|null,
     *     InstanceIds?: list<string>|null,
     *     LayerIds?: list<string>|null,
     *     Command: Shapes\DeploymentCommand,
     *     Comment?: string|null,
     *     CustomJson?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

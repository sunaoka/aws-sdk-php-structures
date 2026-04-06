<?php

namespace Sunaoka\Aws\Structures\OpsWorks\AssignInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<string> $LayerIds
 */
class AssignInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     LayerIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

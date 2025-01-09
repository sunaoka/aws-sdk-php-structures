<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeleteInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property bool $DeleteElasticIp
 * @property bool $DeleteVolumes
 */
class DeleteInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DeleteElasticIp?: bool,
     *     DeleteVolumes?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

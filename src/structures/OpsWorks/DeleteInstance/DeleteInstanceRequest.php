<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeleteInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property bool|null $DeleteElasticIp
 * @property bool|null $DeleteVolumes
 */
class DeleteInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DeleteElasticIp?: bool|null,
     *     DeleteVolumes?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

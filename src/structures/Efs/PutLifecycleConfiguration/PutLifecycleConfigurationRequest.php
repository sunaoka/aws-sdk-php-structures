<?php

namespace Sunaoka\Aws\Structures\Efs\PutLifecycleConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property list<Shapes\LifecyclePolicy> $LifecyclePolicies
 */
class PutLifecycleConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     LifecyclePolicies: list<Shapes\LifecyclePolicy>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

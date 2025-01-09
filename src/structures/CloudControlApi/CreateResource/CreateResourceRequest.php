<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\CreateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property string $TypeVersionId
 * @property string $RoleArn
 * @property string $ClientToken
 * @property string $DesiredState
 */
class CreateResourceRequest extends Request
{
    /**
     * @param array{
     *     TypeName: string,
     *     TypeVersionId?: string,
     *     RoleArn?: string,
     *     ClientToken?: string,
     *     DesiredState: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

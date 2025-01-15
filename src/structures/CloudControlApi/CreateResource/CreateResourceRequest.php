<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\CreateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property string|null $TypeVersionId
 * @property string|null $RoleArn
 * @property string|null $ClientToken
 * @property string $DesiredState
 */
class CreateResourceRequest extends Request
{
    /**
     * @param array{
     *     TypeName: string,
     *     TypeVersionId?: string|null,
     *     RoleArn?: string|null,
     *     ClientToken?: string|null,
     *     DesiredState: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

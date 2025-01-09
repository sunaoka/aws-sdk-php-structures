<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\GetResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property string $TypeVersionId
 * @property string $RoleArn
 * @property string $Identifier
 */
class GetResourceRequest extends Request
{
    /**
     * @param array{
     *     TypeName: string,
     *     TypeVersionId?: string,
     *     RoleArn?: string,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

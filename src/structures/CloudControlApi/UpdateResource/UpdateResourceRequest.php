<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\UpdateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property string $TypeVersionId
 * @property string $RoleArn
 * @property string $ClientToken
 * @property string $Identifier
 * @property string $PatchDocument
 */
class UpdateResourceRequest extends Request
{
    /**
     * @param array{
     *     TypeName: string,
     *     TypeVersionId?: string,
     *     RoleArn?: string,
     *     ClientToken?: string,
     *     Identifier: string,
     *     PatchDocument: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

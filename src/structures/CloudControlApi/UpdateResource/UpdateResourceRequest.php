<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\UpdateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property string|null $TypeVersionId
 * @property string|null $RoleArn
 * @property string|null $ClientToken
 * @property string $Identifier
 * @property string $PatchDocument
 */
class UpdateResourceRequest extends Request
{
    /**
     * @param array{
     *     TypeName: string,
     *     TypeVersionId?: string|null,
     *     RoleArn?: string|null,
     *     ClientToken?: string|null,
     *     Identifier: string,
     *     PatchDocument: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

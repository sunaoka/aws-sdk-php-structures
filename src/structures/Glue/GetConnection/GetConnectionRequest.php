<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $Name
 * @property bool|null $HidePassword
 * @property 'SPARK'|'ATHENA'|'PYTHON'|null $ApplyOverrideForComputeEnvironment
 */
class GetConnectionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Name: string,
     *     HidePassword?: bool|null,
     *     ApplyOverrideForComputeEnvironment?: 'SPARK'|'ATHENA'|'PYTHON'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

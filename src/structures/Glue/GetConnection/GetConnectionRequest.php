<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $Name
 * @property bool $HidePassword
 * @property 'SPARK'|'ATHENA'|'PYTHON' $ApplyOverrideForComputeEnvironment
 */
class GetConnectionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Name: string,
     *     HidePassword?: bool,
     *     ApplyOverrideForComputeEnvironment?: 'SPARK'|'ATHENA'|'PYTHON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

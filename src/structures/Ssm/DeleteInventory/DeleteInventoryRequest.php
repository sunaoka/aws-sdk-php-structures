<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteInventory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property 'DisableSchema'|'DeleteSchema'|null $SchemaDeleteOption
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 */
class DeleteInventoryRequest extends Request
{
    /**
     * @param array{
     *     TypeName: string,
     *     SchemaDeleteOption?: 'DisableSchema'|'DeleteSchema'|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

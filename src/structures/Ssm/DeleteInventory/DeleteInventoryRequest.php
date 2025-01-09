<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteInventory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property 'DisableSchema'|'DeleteSchema' $SchemaDeleteOption
 * @property bool $DryRun
 * @property string $ClientToken
 */
class DeleteInventoryRequest extends Request
{
    /**
     * @param array{
     *     TypeName: string,
     *     SchemaDeleteOption?: 'DisableSchema'|'DeleteSchema',
     *     DryRun?: bool,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Schemas\UpdateSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientTokenId
 * @property string $Content
 * @property string $Description
 * @property string $RegistryName
 * @property string $SchemaName
 * @property 'OpenApi3' $Type
 */
class UpdateSchemaRequest extends Request
{
    /**
     * @param array{
     *     ClientTokenId?: string,
     *     Content?: string,
     *     Description?: string,
     *     RegistryName: string,
     *     SchemaName: string,
     *     Type?: 'OpenApi3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

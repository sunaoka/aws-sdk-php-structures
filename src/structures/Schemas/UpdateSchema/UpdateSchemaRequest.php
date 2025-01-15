<?php

namespace Sunaoka\Aws\Structures\Schemas\UpdateSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientTokenId
 * @property string|null $Content
 * @property string|null $Description
 * @property string $RegistryName
 * @property string $SchemaName
 * @property 'OpenApi3'|null $Type
 */
class UpdateSchemaRequest extends Request
{
    /**
     * @param array{
     *     ClientTokenId?: string|null,
     *     Content?: string|null,
     *     Description?: string|null,
     *     RegistryName: string,
     *     SchemaName: string,
     *     Type?: 'OpenApi3'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

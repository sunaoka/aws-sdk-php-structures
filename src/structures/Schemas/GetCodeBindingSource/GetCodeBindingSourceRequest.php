<?php

namespace Sunaoka\Aws\Structures\Schemas\GetCodeBindingSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Language
 * @property string $RegistryName
 * @property string $SchemaName
 * @property string|null $SchemaVersion
 */
class GetCodeBindingSourceRequest extends Request
{
    /**
     * @param array{
     *     Language: string,
     *     RegistryName: string,
     *     SchemaName: string,
     *     SchemaVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

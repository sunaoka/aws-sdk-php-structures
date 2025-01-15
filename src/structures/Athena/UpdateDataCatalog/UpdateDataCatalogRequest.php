<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateDataCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED' $Type
 * @property string|null $Description
 * @property array<string, string>|null $Parameters
 */
class UpdateDataCatalogRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED',
     *     Description?: string|null,
     *     Parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateDataCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED' $Type
 * @property string $Description
 * @property array<string, string> $Parameters
 */
class UpdateDataCatalogRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED',
     *     Description?: string,
     *     Parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

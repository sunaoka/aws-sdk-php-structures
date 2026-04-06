<?php

namespace Sunaoka\Aws\Structures\Athena\CreateDataCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED' $Type
 * @property string|null $Description
 * @property array<string, string>|null $Parameters
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDataCatalogRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED',
     *     Description?: string|null,
     *     Parameters?: array<string, string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

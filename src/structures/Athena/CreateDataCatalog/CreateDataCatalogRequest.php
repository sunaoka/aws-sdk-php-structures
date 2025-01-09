<?php

namespace Sunaoka\Aws\Structures\Athena\CreateDataCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED' $Type
 * @property string $Description
 * @property array<string, string> $Parameters
 * @property list<Shapes\Tag> $Tags
 */
class CreateDataCatalogRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED',
     *     Description?: string,
     *     Parameters?: array<string, string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

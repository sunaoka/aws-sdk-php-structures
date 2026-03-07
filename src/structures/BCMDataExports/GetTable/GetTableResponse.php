<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetTable;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TableName
 * @property string|null $Description
 * @property array<string, string>|null $TableProperties
 * @property list<Shapes\Column>|null $Schema
 */
class GetTableResponse extends Response
{
}

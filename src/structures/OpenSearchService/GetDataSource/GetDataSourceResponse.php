<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DataSourceType|null $DataSourceType
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ACTIVE'|'DISABLED'|null $Status
 */
class GetDataSourceResponse extends Response
{
}

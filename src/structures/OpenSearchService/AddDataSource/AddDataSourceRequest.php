<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AddDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Name
 * @property Shapes\DataSourceType $DataSourceType
 * @property string $Description
 */
class AddDataSourceRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Name: string,
     *     DataSourceType: Shapes\DataSourceType,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

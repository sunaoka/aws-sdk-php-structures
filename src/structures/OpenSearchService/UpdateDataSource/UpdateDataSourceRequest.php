<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Name
 * @property Shapes\DataSourceType $DataSourceType
 * @property string $Description
 * @property 'ACTIVE'|'DISABLED' $Status
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Name: string,
     *     DataSourceType: Shapes\DataSourceType,
     *     Description?: string,
     *     Status?: 'ACTIVE'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

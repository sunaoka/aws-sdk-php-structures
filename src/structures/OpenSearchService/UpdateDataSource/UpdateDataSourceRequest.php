<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Name
 * @property Shapes\DataSourceType $DataSourceType
 * @property string|null $Description
 * @property 'ACTIVE'|'DISABLED'|null $Status
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Name: string,
     *     DataSourceType: Shapes\DataSourceType,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

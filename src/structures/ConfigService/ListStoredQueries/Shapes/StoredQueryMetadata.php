<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListStoredQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryId
 * @property string $QueryArn
 * @property string $QueryName
 * @property string|null $Description
 */
class StoredQueryMetadata extends Shape
{
    /**
     * @param array{
     *     QueryId: string,
     *     QueryArn: string,
     *     QueryName: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

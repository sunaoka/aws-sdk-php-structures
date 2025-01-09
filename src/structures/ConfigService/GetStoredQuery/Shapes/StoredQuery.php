<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetStoredQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryId
 * @property string $QueryArn
 * @property string $QueryName
 * @property string $Description
 * @property string $Expression
 */
class StoredQuery extends Shape
{
    /**
     * @param array{
     *     QueryId?: string,
     *     QueryArn?: string,
     *     QueryName: string,
     *     Description?: string,
     *     Expression?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

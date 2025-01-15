<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutStoredQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QueryId
 * @property string|null $QueryArn
 * @property string $QueryName
 * @property string|null $Description
 * @property string|null $Expression
 */
class StoredQuery extends Shape
{
    /**
     * @param array{
     *     QueryId?: string|null,
     *     QueryArn?: string|null,
     *     QueryName: string,
     *     Description?: string|null,
     *     Expression?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

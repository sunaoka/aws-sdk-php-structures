<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutStoredQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StoredQuery $StoredQuery
 * @property list<Shapes\Tag> $Tags
 */
class PutStoredQueryRequest extends Request
{
    /**
     * @param array{
     *     StoredQuery: Shapes\StoredQuery,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

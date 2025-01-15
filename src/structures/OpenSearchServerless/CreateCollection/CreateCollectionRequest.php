<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $name
 * @property 'ENABLED'|'DISABLED'|null $standbyReplicas
 * @property list<Shapes\Tag>|null $tags
 * @property 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'|null $type
 */
class CreateCollectionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     name: string,
     *     standbyReplicas?: 'ENABLED'|'DISABLED'|null,
     *     tags?: list<Shapes\Tag>|null,
     *     type?: 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

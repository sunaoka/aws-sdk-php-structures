<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'|null $type
 * @property string|null $description
 * @property list<Shapes\Tag>|null $tags
 * @property 'ENABLED'|'DISABLED'|null $standbyReplicas
 * @property Shapes\VectorOptions|null $vectorOptions
 * @property string|null $clientToken
 */
class CreateCollectionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     type?: 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'|null,
     *     description?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     standbyReplicas?: 'ENABLED'|'DISABLED'|null,
     *     vectorOptions?: Shapes\VectorOptions|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

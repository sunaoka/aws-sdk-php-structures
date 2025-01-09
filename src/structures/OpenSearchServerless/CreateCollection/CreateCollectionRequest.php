<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $name
 * @property 'ENABLED'|'DISABLED' $standbyReplicas
 * @property list<Shapes\Tag> $tags
 * @property 'SEARCH'|'TIMESERIES'|'VECTORSEARCH' $type
 */
class CreateCollectionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     name: string,
     *     standbyReplicas?: 'ENABLED'|'DISABLED',
     *     tags?: list<Shapes\Tag>,
     *     type?: 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

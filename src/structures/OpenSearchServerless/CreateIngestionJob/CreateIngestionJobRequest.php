<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateIngestionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collectionId
 * @property string $ingestionJobName
 * @property string $indexName
 * @property string|null $failureIndexName
 * @property Shapes\IngestionJobSource $source
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 */
class CreateIngestionJobRequest extends Request
{
    /**
     * @param array{
     *     collectionId: string,
     *     ingestionJobName: string,
     *     indexName: string,
     *     failureIndexName?: string|null,
     *     source: Shapes\IngestionJobSource,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

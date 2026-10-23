<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateIngestionStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collectionId
 * @property string $ingestionStreamName
 * @property string $indexName
 * @property string|null $failureIndexName
 * @property Shapes\IngestionStreamSource $source
 * @property string $roleArn
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 */
class CreateIngestionStreamRequest extends Request
{
    /**
     * @param array{
     *     collectionId: string,
     *     ingestionStreamName: string,
     *     indexName: string,
     *     failureIndexName?: string|null,
     *     source: Shapes\IngestionStreamSource,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

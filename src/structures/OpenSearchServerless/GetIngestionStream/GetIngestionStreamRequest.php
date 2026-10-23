<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetIngestionStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collectionId
 * @property string $ingestionStreamId
 */
class GetIngestionStreamRequest extends Request
{
    /**
     * @param array{
     *     collectionId: string,
     *     ingestionStreamId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

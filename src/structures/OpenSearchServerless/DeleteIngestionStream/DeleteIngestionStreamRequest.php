<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteIngestionStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collectionId
 * @property string $ingestionStreamId
 * @property string|null $clientToken
 */
class DeleteIngestionStreamRequest extends Request
{
    /**
     * @param array{
     *     collectionId: string,
     *     ingestionStreamId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

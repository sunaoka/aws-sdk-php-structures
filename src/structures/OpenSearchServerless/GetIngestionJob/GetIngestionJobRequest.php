<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetIngestionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collectionId
 * @property string $ingestionJobId
 */
class GetIngestionJobRequest extends Request
{
    /**
     * @param array{
     *     collectionId: string,
     *     ingestionJobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

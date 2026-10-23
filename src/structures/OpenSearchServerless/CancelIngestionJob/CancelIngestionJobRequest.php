<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CancelIngestionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collectionId
 * @property string $ingestionJobId
 * @property string|null $clientToken
 */
class CancelIngestionJobRequest extends Request
{
    /**
     * @param array{
     *     collectionId: string,
     *     ingestionJobId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

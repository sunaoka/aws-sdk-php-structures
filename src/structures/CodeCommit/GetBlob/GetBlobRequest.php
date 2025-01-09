<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetBlob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $blobId
 */
class GetBlobRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     blobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

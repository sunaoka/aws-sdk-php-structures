<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $CodeSha256
 * @property string|null $Description
 * @property string|null $RevisionId
 * @property 'LATEST_PUBLISHED'|null $PublishTo
 */
class PublishVersionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     CodeSha256?: string|null,
     *     Description?: string|null,
     *     RevisionId?: string|null,
     *     PublishTo?: 'LATEST_PUBLISHED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

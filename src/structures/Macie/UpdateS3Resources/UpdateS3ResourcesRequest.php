<?php

namespace Sunaoka\Aws\Structures\Macie\UpdateS3Resources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $memberAccountId
 * @property list<Shapes\S3ResourceClassificationUpdate> $s3ResourcesUpdate
 */
class UpdateS3ResourcesRequest extends Request
{
    /**
     * @param array{
     *     memberAccountId?: string|null,
     *     s3ResourcesUpdate: list<Shapes\S3ResourceClassificationUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

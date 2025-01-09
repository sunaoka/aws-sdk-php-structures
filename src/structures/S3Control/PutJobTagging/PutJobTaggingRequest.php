<?php

namespace Sunaoka\Aws\Structures\S3Control\PutJobTagging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $JobId
 * @property list<Shapes\S3Tag> $Tags
 */
class PutJobTaggingRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     JobId: string,
     *     Tags: list<Shapes\S3Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

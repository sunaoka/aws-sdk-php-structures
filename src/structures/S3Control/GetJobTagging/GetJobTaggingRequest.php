<?php

namespace Sunaoka\Aws\Structures\S3Control\GetJobTagging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $JobId
 */
class GetJobTaggingRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     JobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

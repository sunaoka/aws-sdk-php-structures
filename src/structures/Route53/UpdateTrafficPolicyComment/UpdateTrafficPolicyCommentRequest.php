<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateTrafficPolicyComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int<1, 1000> $Version
 * @property string $Comment
 */
class UpdateTrafficPolicyCommentRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Version: int<1, 1000>,
     *     Comment: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

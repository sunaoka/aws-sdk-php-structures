<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateTrafficPolicyComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int $Version
 * @property string $Comment
 */
class UpdateTrafficPolicyCommentRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Version: int,
     *     Comment: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHostedZoneComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Comment
 */
class UpdateHostedZoneCommentRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

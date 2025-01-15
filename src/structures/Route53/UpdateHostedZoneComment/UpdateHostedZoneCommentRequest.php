<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHostedZoneComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Comment
 */
class UpdateHostedZoneCommentRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

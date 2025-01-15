<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateHITReviewStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 * @property bool|null $Revert
 */
class UpdateHITReviewStatusRequest extends Request
{
    /**
     * @param array{
     *     HITId: string,
     *     Revert?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

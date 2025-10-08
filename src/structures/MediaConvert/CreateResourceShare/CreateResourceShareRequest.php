<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateResourceShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property string $SupportCaseId
 */
class CreateResourceShareRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     SupportCaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

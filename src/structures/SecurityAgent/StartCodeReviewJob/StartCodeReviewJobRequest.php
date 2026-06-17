<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\StartCodeReviewJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $codeReviewId
 * @property Shapes\DiffSource|null $diffSource
 */
class StartCodeReviewJobRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     codeReviewId: string,
     *     diffSource?: Shapes\DiffSource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

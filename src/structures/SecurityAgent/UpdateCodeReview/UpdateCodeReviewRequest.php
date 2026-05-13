<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateCodeReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $codeReviewId
 * @property string $agentSpaceId
 * @property string|null $title
 * @property Shapes\Assets|null $assets
 * @property string|null $serviceRole
 * @property Shapes\CloudWatchLog|null $logConfig
 * @property 'AUTOMATIC'|'DISABLED'|null $codeRemediationStrategy
 */
class UpdateCodeReviewRequest extends Request
{
    /**
     * @param array{
     *     codeReviewId: string,
     *     agentSpaceId: string,
     *     title?: string|null,
     *     assets?: Shapes\Assets|null,
     *     serviceRole?: string|null,
     *     logConfig?: Shapes\CloudWatchLog|null,
     *     codeRemediationStrategy?: 'AUTOMATIC'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

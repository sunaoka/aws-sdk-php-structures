<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateCodeReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $title
 * @property string $agentSpaceId
 * @property Shapes\Assets $assets
 * @property string|null $serviceRole
 * @property Shapes\CloudWatchLog|null $logConfig
 * @property 'AUTOMATIC'|'DISABLED'|null $codeRemediationStrategy
 */
class CreateCodeReviewRequest extends Request
{
    /**
     * @param array{
     *     title: string,
     *     agentSpaceId: string,
     *     assets: Shapes\Assets,
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

<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationAnalysisTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $analysisTemplateArn
 */
class GetCollaborationAnalysisTemplateRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     analysisTemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

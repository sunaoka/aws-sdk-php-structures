<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetCollaborationAnalysisTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property list<string> $analysisTemplateArns
 */
class BatchGetCollaborationAnalysisTemplateRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     analysisTemplateArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackName
 * @property string|null $ChangeSetName
 * @property 'Original'|'Processed'|null $TemplateStage
 */
class GetTemplateRequest extends Request
{
    /**
     * @param array{
     *     StackName?: string|null,
     *     ChangeSetName?: string|null,
     *     TemplateStage?: 'Original'|'Processed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $ChangeSetName
 * @property 'Original'|'Processed' $TemplateStage
 */
class GetTemplateRequest extends Request
{
    /**
     * @param array{
     *     StackName?: string,
     *     ChangeSetName?: string,
     *     TemplateStage?: 'Original'|'Processed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplateSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TemplateBody
 * @property string|null $TemplateURL
 * @property string|null $StackName
 * @property string|null $StackSetName
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 * @property Shapes\TemplateSummaryConfig|null $TemplateSummaryConfig
 */
class GetTemplateSummaryRequest extends Request
{
    /**
     * @param array{
     *     TemplateBody?: string|null,
     *     TemplateURL?: string|null,
     *     StackName?: string|null,
     *     StackSetName?: string|null,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null,
     *     TemplateSummaryConfig?: Shapes\TemplateSummaryConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

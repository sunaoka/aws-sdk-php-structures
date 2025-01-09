<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplateSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateBody
 * @property string $TemplateURL
 * @property string $StackName
 * @property string $StackSetName
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 * @property Shapes\TemplateSummaryConfig $TemplateSummaryConfig
 */
class GetTemplateSummaryRequest extends Request
{
    /**
     * @param array{
     *     TemplateBody?: string,
     *     TemplateURL?: string,
     *     StackName?: string,
     *     StackSetName?: string,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN',
     *     TemplateSummaryConfig?: Shapes\TemplateSummaryConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

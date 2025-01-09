<?php

namespace Sunaoka\Aws\Structures\CloudFormation\EstimateTemplateCost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateBody
 * @property string $TemplateURL
 * @property list<Shapes\Parameter> $Parameters
 */
class EstimateTemplateCostRequest extends Request
{
    /**
     * @param array{
     *     TemplateBody?: string,
     *     TemplateURL?: string,
     *     Parameters?: list<Shapes\Parameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudFormation\EstimateTemplateCost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TemplateBody
 * @property string|null $TemplateURL
 * @property list<Shapes\Parameter>|null $Parameters
 */
class EstimateTemplateCostRequest extends Request
{
    /**
     * @param array{
     *     TemplateBody?: string|null,
     *     TemplateURL?: string|null,
     *     Parameters?: list<Shapes\Parameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

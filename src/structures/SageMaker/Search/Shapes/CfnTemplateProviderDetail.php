<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateName
 * @property string $TemplateURL
 * @property string|null $RoleARN
 * @property list<CfnStackParameter>|null $Parameters
 * @property CfnStackDetail|null $StackDetail
 */
class CfnTemplateProviderDetail extends Shape
{
    /**
     * @param array{
     *     TemplateName: string,
     *     TemplateURL: string,
     *     RoleARN?: string|null,
     *     Parameters?: list<CfnStackParameter>|null,
     *     StackDetail?: CfnStackDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

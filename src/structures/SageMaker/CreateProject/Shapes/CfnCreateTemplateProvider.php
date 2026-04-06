<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateName
 * @property string $TemplateURL
 * @property string|null $RoleARN
 * @property list<CfnStackCreateParameter>|null $Parameters
 */
class CfnCreateTemplateProvider extends Shape
{
    /**
     * @param array{
     *     TemplateName: string,
     *     TemplateURL: string,
     *     RoleARN?: string|null,
     *     Parameters?: list<CfnStackCreateParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

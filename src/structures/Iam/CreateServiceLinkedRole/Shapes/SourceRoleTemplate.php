<?php

namespace Sunaoka\Aws\Structures\Iam\CreateServiceLinkedRole\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateArn
 * @property int $TemplateMinorVersion
 */
class SourceRoleTemplate extends Shape
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     TemplateMinorVersion: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

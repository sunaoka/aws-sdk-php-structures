<?php

namespace Sunaoka\Aws\Structures\Iot\ListManagedJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateArn
 * @property string $templateName
 * @property string $description
 * @property list<string> $environments
 * @property string $templateVersion
 */
class ManagedJobTemplateSummary extends Shape
{
    /**
     * @param array{
     *     templateArn?: string,
     *     templateName?: string,
     *     description?: string,
     *     environments?: list<string>,
     *     templateVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

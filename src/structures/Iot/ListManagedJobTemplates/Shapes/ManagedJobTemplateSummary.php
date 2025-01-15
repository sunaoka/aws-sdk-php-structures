<?php

namespace Sunaoka\Aws\Structures\Iot\ListManagedJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $templateArn
 * @property string|null $templateName
 * @property string|null $description
 * @property list<string>|null $environments
 * @property string|null $templateVersion
 */
class ManagedJobTemplateSummary extends Shape
{
    /**
     * @param array{
     *     templateArn?: string|null,
     *     templateName?: string|null,
     *     description?: string|null,
     *     environments?: list<string>|null,
     *     templateVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

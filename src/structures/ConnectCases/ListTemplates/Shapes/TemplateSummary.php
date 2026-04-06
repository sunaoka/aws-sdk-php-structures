<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'Active'|'Inactive' $status
 * @property string $templateArn
 * @property string $templateId
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     status: 'Active'|'Inactive',
     *     templateArn: string,
     *     templateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

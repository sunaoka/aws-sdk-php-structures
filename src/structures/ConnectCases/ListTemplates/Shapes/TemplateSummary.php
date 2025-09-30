<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateId
 * @property string $templateArn
 * @property string $name
 * @property 'Active'|'Inactive' $status
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     templateId: string,
     *     templateArn: string,
     *     name: string,
     *     status: 'Active'|'Inactive'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

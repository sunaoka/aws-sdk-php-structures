<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateId
 * @property string $templateArn
 * @property string $name
 * @property 'Active'|'Inactive' $status
 * @property list<TagPropagationConfiguration>|null $tagPropagationConfigurations
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     templateId: string,
     *     templateArn: string,
     *     name: string,
     *     status: 'Active'|'Inactive',
     *     tagPropagationConfigurations?: list<TagPropagationConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

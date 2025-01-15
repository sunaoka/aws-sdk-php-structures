<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjectTypeTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TemplateId
 * @property string|null $SourceName
 * @property string|null $SourceObject
 */
class ListProfileObjectTypeTemplateItem extends Shape
{
    /**
     * @param array{
     *     TemplateId?: string|null,
     *     SourceName?: string|null,
     *     SourceObject?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

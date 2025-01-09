<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjectTypeTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateId
 * @property string $SourceName
 * @property string $SourceObject
 */
class ListProfileObjectTypeTemplateItem extends Shape
{
    /**
     * @param array{
     *     TemplateId?: string,
     *     SourceName?: string,
     *     SourceObject?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

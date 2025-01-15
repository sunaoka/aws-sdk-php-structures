<?php

namespace Sunaoka\Aws\Structures\SesV2\ListEmailTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TemplateName
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 */
class EmailTemplateMetadata extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

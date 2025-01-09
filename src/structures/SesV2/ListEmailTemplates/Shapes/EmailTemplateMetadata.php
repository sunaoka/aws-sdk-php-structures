<?php

namespace Sunaoka\Aws\Structures\SesV2\ListEmailTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateName
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class EmailTemplateMetadata extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

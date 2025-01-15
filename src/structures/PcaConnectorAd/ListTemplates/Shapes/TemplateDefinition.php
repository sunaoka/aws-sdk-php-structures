<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TemplateV2|null $TemplateV2
 * @property TemplateV3|null $TemplateV3
 * @property TemplateV4|null $TemplateV4
 */
class TemplateDefinition extends Shape
{
    /**
     * @param array{
     *     TemplateV2?: TemplateV2|null,
     *     TemplateV3?: TemplateV3|null,
     *     TemplateV4?: TemplateV4|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

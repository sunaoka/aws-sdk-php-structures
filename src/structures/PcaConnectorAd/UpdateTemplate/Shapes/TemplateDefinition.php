<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TemplateV2 $TemplateV2
 * @property TemplateV3 $TemplateV3
 * @property TemplateV4 $TemplateV4
 */
class TemplateDefinition extends Shape
{
    /**
     * @param array{
     *     TemplateV2?: TemplateV2,
     *     TemplateV3?: TemplateV3,
     *     TemplateV4?: TemplateV4
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

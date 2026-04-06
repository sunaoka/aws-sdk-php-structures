<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $ComponentId
 * @property 'HANA'|'HANA_NODE'|'ABAP'|'ASCS'|'DIALOG'|'WEBDISP'|'WD'|'ERS'|null $ComponentType
 * @property array<string, string>|null $Tags
 * @property string|null $Arn
 */
class ComponentSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     ComponentId?: string|null,
     *     ComponentType?: 'HANA'|'HANA_NODE'|'ABAP'|'ASCS'|'DIALOG'|'WEBDISP'|'WD'|'ERS'|null,
     *     Tags?: array<string, string>|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

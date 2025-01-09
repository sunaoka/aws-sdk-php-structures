<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $ComponentId
 * @property 'HANA'|'HANA_NODE'|'ABAP'|'ASCS'|'DIALOG'|'WEBDISP'|'WD'|'ERS' $ComponentType
 * @property array<string, string> $Tags
 * @property string $Arn
 */
class ComponentSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     ComponentId?: string,
     *     ComponentType?: 'HANA'|'HANA_NODE'|'ABAP'|'ASCS'|'DIALOG'|'WEBDISP'|'WD'|'ERS',
     *     Tags?: array<string, string>,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowModuleVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $VersionDescription
 * @property int<1, max>|null $Version
 */
class ContactFlowModuleVersionSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     VersionDescription?: string|null,
     *     Version?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

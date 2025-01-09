<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $VersionDescription
 * @property int $Version
 */
class ContactFlowVersionSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     VersionDescription?: string,
     *     Version?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

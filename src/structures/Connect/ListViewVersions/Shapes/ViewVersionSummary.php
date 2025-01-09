<?php

namespace Sunaoka\Aws\Structures\Connect\ListViewVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Description
 * @property string $Name
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED' $Type
 * @property int $Version
 * @property string $VersionDescription
 */
class ViewVersionSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Description?: string,
     *     Name?: string,
     *     Type?: 'CUSTOMER_MANAGED'|'AWS_MANAGED',
     *     Version?: int,
     *     VersionDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

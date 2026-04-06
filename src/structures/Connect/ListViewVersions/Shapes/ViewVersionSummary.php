<?php

namespace Sunaoka\Aws\Structures\Connect\ListViewVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Description
 * @property string|null $Name
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null $Type
 * @property int|null $Version
 * @property string|null $VersionDescription
 */
class ViewVersionSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Description?: string|null,
     *     Name?: string|null,
     *     Type?: 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null,
     *     Version?: int|null,
     *     VersionDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

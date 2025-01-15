<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListSubscriptionDefinitionVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CreationTimestamp
 * @property string|null $Id
 * @property string|null $Version
 */
class VersionInformation extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreationTimestamp?: string|null,
     *     Id?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

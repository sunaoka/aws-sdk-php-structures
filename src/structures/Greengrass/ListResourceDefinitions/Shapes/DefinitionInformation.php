<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListResourceDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CreationTimestamp
 * @property string|null $Id
 * @property string|null $LastUpdatedTimestamp
 * @property string|null $LatestVersion
 * @property string|null $LatestVersionArn
 * @property string|null $Name
 * @property array<string, string>|null $Tags
 */
class DefinitionInformation extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreationTimestamp?: string|null,
     *     Id?: string|null,
     *     LastUpdatedTimestamp?: string|null,
     *     LatestVersion?: string|null,
     *     LatestVersionArn?: string|null,
     *     Name?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

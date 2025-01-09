<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListResourceDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CreationTimestamp
 * @property string $Id
 * @property string $LastUpdatedTimestamp
 * @property string $LatestVersion
 * @property string $LatestVersionArn
 * @property string $Name
 * @property array<string, string> $Tags
 */
class DefinitionInformation extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreationTimestamp?: string,
     *     Id?: string,
     *     LastUpdatedTimestamp?: string,
     *     LatestVersion?: string,
     *     LatestVersionArn?: string,
     *     Name?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

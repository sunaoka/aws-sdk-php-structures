<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CreationTimestamp
 * @property string $Id
 * @property string $LastUpdatedTimestamp
 * @property string $LatestVersion
 * @property string $LatestVersionArn
 * @property string $Name
 */
class GroupInformation extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreationTimestamp?: string,
     *     Id?: string,
     *     LastUpdatedTimestamp?: string,
     *     LatestVersion?: string,
     *     LatestVersionArn?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListEnvironmentVpcs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property list<string> $CidrBlocks
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $EnvironmentId
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $VpcId
 * @property string $VpcName
 */
class EnvironmentVpc extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     CidrBlocks?: list<string>,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     EnvironmentId?: string,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     VpcId?: string,
     *     VpcName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

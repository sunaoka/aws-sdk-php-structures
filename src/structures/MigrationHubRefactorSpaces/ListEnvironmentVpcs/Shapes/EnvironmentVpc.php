<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListEnvironmentVpcs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property list<string>|null $CidrBlocks
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $EnvironmentId
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $VpcId
 * @property string|null $VpcName
 */
class EnvironmentVpc extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     CidrBlocks?: list<string>|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     EnvironmentId?: string|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     VpcId?: string|null,
     *     VpcName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

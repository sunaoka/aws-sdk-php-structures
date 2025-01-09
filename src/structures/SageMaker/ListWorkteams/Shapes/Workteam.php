<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListWorkteams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkteamName
 * @property list<MemberDefinition> $MemberDefinitions
 * @property string $WorkteamArn
 * @property string $WorkforceArn
 * @property list<string> $ProductListingIds
 * @property string $Description
 * @property string $SubDomain
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property \Aws\Api\DateTimeResult $LastUpdatedDate
 * @property NotificationConfiguration $NotificationConfiguration
 * @property WorkerAccessConfiguration $WorkerAccessConfiguration
 */
class Workteam extends Shape
{
    /**
     * @param array{
     *     WorkteamName: string,
     *     MemberDefinitions: list<MemberDefinition>,
     *     WorkteamArn: string,
     *     WorkforceArn?: string,
     *     ProductListingIds?: list<string>,
     *     Description: string,
     *     SubDomain?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     LastUpdatedDate?: \Aws\Api\DateTimeResult,
     *     NotificationConfiguration?: NotificationConfiguration,
     *     WorkerAccessConfiguration?: WorkerAccessConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

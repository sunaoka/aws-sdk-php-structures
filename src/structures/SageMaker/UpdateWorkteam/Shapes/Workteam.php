<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkteamName
 * @property list<MemberDefinition> $MemberDefinitions
 * @property string $WorkteamArn
 * @property string|null $WorkforceArn
 * @property list<string>|null $ProductListingIds
 * @property string $Description
 * @property string|null $SubDomain
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDate
 * @property NotificationConfiguration|null $NotificationConfiguration
 * @property WorkerAccessConfiguration|null $WorkerAccessConfiguration
 */
class Workteam extends Shape
{
    /**
     * @param array{
     *     WorkteamName: string,
     *     MemberDefinitions: list<MemberDefinition>,
     *     WorkteamArn: string,
     *     WorkforceArn?: string|null,
     *     ProductListingIds?: list<string>|null,
     *     Description: string,
     *     SubDomain?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     NotificationConfiguration?: NotificationConfiguration|null,
     *     WorkerAccessConfiguration?: WorkerAccessConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

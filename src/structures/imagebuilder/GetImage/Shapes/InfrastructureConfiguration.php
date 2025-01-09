<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property list<string> $instanceTypes
 * @property string $instanceProfileName
 * @property list<string> $securityGroupIds
 * @property string $subnetId
 * @property Logging $logging
 * @property string $keyPair
 * @property bool $terminateInstanceOnFailure
 * @property string $snsTopicArn
 * @property string $dateCreated
 * @property string $dateUpdated
 * @property array<string, string> $resourceTags
 * @property InstanceMetadataOptions $instanceMetadataOptions
 * @property array<string, string> $tags
 * @property Placement $placement
 */
class InfrastructureConfiguration extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     instanceTypes?: list<string>,
     *     instanceProfileName?: string,
     *     securityGroupIds?: list<string>,
     *     subnetId?: string,
     *     logging?: Logging,
     *     keyPair?: string,
     *     terminateInstanceOnFailure?: bool,
     *     snsTopicArn?: string,
     *     dateCreated?: string,
     *     dateUpdated?: string,
     *     resourceTags?: array<string, string>,
     *     instanceMetadataOptions?: InstanceMetadataOptions,
     *     tags?: array<string, string>,
     *     placement?: Placement
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

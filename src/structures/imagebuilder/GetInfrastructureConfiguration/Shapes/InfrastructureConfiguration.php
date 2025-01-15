<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetInfrastructureConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property list<string>|null $instanceTypes
 * @property string|null $instanceProfileName
 * @property list<string>|null $securityGroupIds
 * @property string|null $subnetId
 * @property Logging|null $logging
 * @property string|null $keyPair
 * @property bool|null $terminateInstanceOnFailure
 * @property string|null $snsTopicArn
 * @property string|null $dateCreated
 * @property string|null $dateUpdated
 * @property array<string, string>|null $resourceTags
 * @property InstanceMetadataOptions|null $instanceMetadataOptions
 * @property array<string, string>|null $tags
 * @property Placement|null $placement
 */
class InfrastructureConfiguration extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     instanceTypes?: list<string>|null,
     *     instanceProfileName?: string|null,
     *     securityGroupIds?: list<string>|null,
     *     subnetId?: string|null,
     *     logging?: Logging|null,
     *     keyPair?: string|null,
     *     terminateInstanceOnFailure?: bool|null,
     *     snsTopicArn?: string|null,
     *     dateCreated?: string|null,
     *     dateUpdated?: string|null,
     *     resourceTags?: array<string, string>|null,
     *     instanceMetadataOptions?: InstanceMetadataOptions|null,
     *     tags?: array<string, string>|null,
     *     placement?: Placement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

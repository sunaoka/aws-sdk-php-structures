<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateInfrastructureConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<string> $instanceTypes
 * @property string $instanceProfileName
 * @property list<string> $securityGroupIds
 * @property string $subnetId
 * @property Shapes\Logging $logging
 * @property string $keyPair
 * @property bool $terminateInstanceOnFailure
 * @property string $snsTopicArn
 * @property array<string, string> $resourceTags
 * @property Shapes\InstanceMetadataOptions $instanceMetadataOptions
 * @property array<string, string> $tags
 * @property Shapes\Placement $placement
 * @property string $clientToken
 */
class CreateInfrastructureConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     instanceTypes?: list<string>,
     *     instanceProfileName: string,
     *     securityGroupIds?: list<string>,
     *     subnetId?: string,
     *     logging?: Shapes\Logging,
     *     keyPair?: string,
     *     terminateInstanceOnFailure?: bool,
     *     snsTopicArn?: string,
     *     resourceTags?: array<string, string>,
     *     instanceMetadataOptions?: Shapes\InstanceMetadataOptions,
     *     tags?: array<string, string>,
     *     placement?: Shapes\Placement,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

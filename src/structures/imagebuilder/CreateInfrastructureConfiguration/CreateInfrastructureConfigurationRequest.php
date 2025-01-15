<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateInfrastructureConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<string>|null $instanceTypes
 * @property string $instanceProfileName
 * @property list<string>|null $securityGroupIds
 * @property string|null $subnetId
 * @property Shapes\Logging|null $logging
 * @property string|null $keyPair
 * @property bool|null $terminateInstanceOnFailure
 * @property string|null $snsTopicArn
 * @property array<string, string>|null $resourceTags
 * @property Shapes\InstanceMetadataOptions|null $instanceMetadataOptions
 * @property array<string, string>|null $tags
 * @property Shapes\Placement|null $placement
 * @property string $clientToken
 */
class CreateInfrastructureConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     instanceTypes?: list<string>|null,
     *     instanceProfileName: string,
     *     securityGroupIds?: list<string>|null,
     *     subnetId?: string|null,
     *     logging?: Shapes\Logging|null,
     *     keyPair?: string|null,
     *     terminateInstanceOnFailure?: bool|null,
     *     snsTopicArn?: string|null,
     *     resourceTags?: array<string, string>|null,
     *     instanceMetadataOptions?: Shapes\InstanceMetadataOptions|null,
     *     tags?: array<string, string>|null,
     *     placement?: Shapes\Placement|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

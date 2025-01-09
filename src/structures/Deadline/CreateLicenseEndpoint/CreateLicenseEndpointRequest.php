<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateLicenseEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 * @property array<string, string> $tags
 */
class CreateLicenseEndpointRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     securityGroupIds: list<string>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

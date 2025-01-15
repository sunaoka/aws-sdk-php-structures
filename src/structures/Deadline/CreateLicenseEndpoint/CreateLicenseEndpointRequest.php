<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateLicenseEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 * @property array<string, string>|null $tags
 */
class CreateLicenseEndpointRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     securityGroupIds: list<string>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateLicenseEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 * @property array<string, string>|null $tags
 * @property string $vpcId
 */
class CreateLicenseEndpointRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     securityGroupIds: list<string>,
     *     subnetIds: list<string>,
     *     tags?: array<string, string>|null,
     *     vpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

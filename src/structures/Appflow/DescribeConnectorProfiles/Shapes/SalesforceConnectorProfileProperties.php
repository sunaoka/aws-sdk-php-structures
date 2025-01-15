<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instanceUrl
 * @property bool|null $isSandboxEnvironment
 * @property bool|null $usePrivateLinkForMetadataAndAuthorization
 */
class SalesforceConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     instanceUrl?: string|null,
     *     isSandboxEnvironment?: bool|null,
     *     usePrivateLinkForMetadataAndAuthorization?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

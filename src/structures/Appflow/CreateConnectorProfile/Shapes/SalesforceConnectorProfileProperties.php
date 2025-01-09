<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceUrl
 * @property bool $isSandboxEnvironment
 * @property bool $usePrivateLinkForMetadataAndAuthorization
 */
class SalesforceConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     instanceUrl?: string,
     *     isSandboxEnvironment?: bool,
     *     usePrivateLinkForMetadataAndAuthorization?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

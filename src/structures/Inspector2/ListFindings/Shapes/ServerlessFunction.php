<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serverlessFunctionName
 * @property string|null $runtime
 * @property string|null $version
 * @property string|null $codeDigest
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 * @property string|null $networkId
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property string|null $executionRole
 * @property 'IMAGE'|'ZIP'|null $packageType
 * @property list<'X86_64'|'ARM64'>|null $architectures
 * @property list<string>|null $layers
 */
class ServerlessFunction extends Shape
{
    /**
     * @param array{
     *     serverlessFunctionName?: string|null,
     *     runtime?: string|null,
     *     version?: string|null,
     *     codeDigest?: string|null,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     networkId?: string|null,
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     executionRole?: string|null,
     *     packageType?: 'IMAGE'|'ZIP'|null,
     *     architectures?: list<'X86_64'|'ARM64'>|null,
     *     layers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

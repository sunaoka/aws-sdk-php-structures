<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetComponentVersionArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $artifactName
 * @property 'REGIONAL'|'GLOBAL'|null $s3EndpointType
 * @property 'fips'|'standard'|null $iotEndpointType
 */
class GetComponentVersionArtifactRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     artifactName: string,
     *     s3EndpointType?: 'REGIONAL'|'GLOBAL'|null,
     *     iotEndpointType?: 'fips'|'standard'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

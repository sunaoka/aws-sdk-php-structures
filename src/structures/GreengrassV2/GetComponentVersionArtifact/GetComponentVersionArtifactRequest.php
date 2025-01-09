<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetComponentVersionArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $artifactName
 * @property 'REGIONAL'|'GLOBAL' $s3EndpointType
 * @property 'fips'|'standard' $iotEndpointType
 */
class GetComponentVersionArtifactRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     artifactName: string,
     *     s3EndpointType?: 'REGIONAL'|'GLOBAL',
     *     iotEndpointType?: 'fips'|'standard'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

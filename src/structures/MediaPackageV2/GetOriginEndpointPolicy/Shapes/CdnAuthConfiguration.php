<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpointPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $CdnIdentifierSecretArns
 * @property string $SecretsRoleArn
 */
class CdnAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     CdnIdentifierSecretArns: list<string>,
     *     SecretsRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

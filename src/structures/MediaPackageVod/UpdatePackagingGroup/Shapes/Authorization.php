<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\UpdatePackagingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CdnIdentifierSecret
 * @property string $SecretsRoleArn
 */
class Authorization extends Shape
{
    /**
     * @param array{
     *     CdnIdentifierSecret: string,
     *     SecretsRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithWebIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Subject
 * @property string|null $SubjectType
 * @property string|null $Issuer
 * @property string|null $FederatedProviderArn
 */
class OriginIdentity extends Shape
{
    /**
     * @param array{
     *     Subject?: string|null,
     *     SubjectType?: string|null,
     *     Issuer?: string|null,
     *     FederatedProviderArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

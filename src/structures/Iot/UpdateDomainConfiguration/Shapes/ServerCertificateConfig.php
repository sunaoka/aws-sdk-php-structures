<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enableOCSPCheck
 * @property string|null $ocspLambdaArn
 * @property string|null $ocspAuthorizedResponderArn
 */
class ServerCertificateConfig extends Shape
{
    /**
     * @param array{
     *     enableOCSPCheck?: bool|null,
     *     ocspLambdaArn?: string|null,
     *     ocspAuthorizedResponderArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

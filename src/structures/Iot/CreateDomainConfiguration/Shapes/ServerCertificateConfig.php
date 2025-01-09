<?php

namespace Sunaoka\Aws\Structures\Iot\CreateDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enableOCSPCheck
 * @property string $ocspLambdaArn
 * @property string $ocspAuthorizedResponderArn
 */
class ServerCertificateConfig extends Shape
{
    /**
     * @param array{
     *     enableOCSPCheck?: bool,
     *     ocspLambdaArn?: string,
     *     ocspAuthorizedResponderArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

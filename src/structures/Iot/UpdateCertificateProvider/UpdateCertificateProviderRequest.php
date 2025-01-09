<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCertificateProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateProviderName
 * @property string $lambdaFunctionArn
 * @property list<'CreateCertificateFromCsr'> $accountDefaultForOperations
 */
class UpdateCertificateProviderRequest extends Request
{
    /**
     * @param array{
     *     certificateProviderName: string,
     *     lambdaFunctionArn?: string,
     *     accountDefaultForOperations?: list<'CreateCertificateFromCsr'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

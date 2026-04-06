<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCertificateProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateProviderName
 * @property string|null $lambdaFunctionArn
 * @property list<'CreateCertificateFromCsr'>|null $accountDefaultForOperations
 */
class UpdateCertificateProviderRequest extends Request
{
    /**
     * @param array{
     *     certificateProviderName: string,
     *     lambdaFunctionArn?: string|null,
     *     accountDefaultForOperations?: list<'CreateCertificateFromCsr'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

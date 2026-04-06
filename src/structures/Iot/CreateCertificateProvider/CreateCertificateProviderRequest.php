<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCertificateProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateProviderName
 * @property string $lambdaFunctionArn
 * @property list<'CreateCertificateFromCsr'> $accountDefaultForOperations
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateCertificateProviderRequest extends Request
{
    /**
     * @param array{
     *     certificateProviderName: string,
     *     lambdaFunctionArn: string,
     *     accountDefaultForOperations: list<'CreateCertificateFromCsr'>,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

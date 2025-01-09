<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCertificateProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateProviderName
 * @property string $lambdaFunctionArn
 * @property list<'CreateCertificateFromCsr'> $accountDefaultForOperations
 * @property string $clientToken
 * @property list<Shapes\Tag> $tags
 */
class CreateCertificateProviderRequest extends Request
{
    /**
     * @param array{
     *     certificateProviderName: string,
     *     lambdaFunctionArn: string,
     *     accountDefaultForOperations: list<'CreateCertificateFromCsr'>,
     *     clientToken?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

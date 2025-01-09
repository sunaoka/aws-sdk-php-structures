<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string $ClientToken
 * @property string $DirectoryId
 * @property array<string, string> $Tags
 * @property Shapes\VpcInformation $VpcInformation
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     ClientToken?: string,
     *     DirectoryId: string,
     *     Tags?: array<string, string>,
     *     VpcInformation: Shapes\VpcInformation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

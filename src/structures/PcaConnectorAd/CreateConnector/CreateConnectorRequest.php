<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string|null $ClientToken
 * @property string $DirectoryId
 * @property array<string, string>|null $Tags
 * @property Shapes\VpcInformation $VpcInformation
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     ClientToken?: string|null,
     *     DirectoryId: string,
     *     Tags?: array<string, string>|null,
     *     VpcInformation: Shapes\VpcInformation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

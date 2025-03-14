<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateHsmClientCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HsmClientCertificateIdentifier
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateHsmClientCertificateRequest extends Request
{
    /**
     * @param array{
     *     HsmClientCertificateIdentifier: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

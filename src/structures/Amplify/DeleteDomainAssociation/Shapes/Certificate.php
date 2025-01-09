<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteDomainAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AMPLIFY_MANAGED'|'CUSTOM' $type
 * @property string $customCertificateArn
 * @property string $certificateVerificationDNSRecord
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     type: 'AMPLIFY_MANAGED'|'CUSTOM',
     *     customCertificateArn?: string,
     *     certificateVerificationDNSRecord?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

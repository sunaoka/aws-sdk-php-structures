<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateDomainAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AMPLIFY_MANAGED'|'CUSTOM' $type
 * @property string|null $customCertificateArn
 * @property string|null $certificateVerificationDNSRecord
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     type: 'AMPLIFY_MANAGED'|'CUSTOM',
     *     customCertificateArn?: string|null,
     *     certificateVerificationDNSRecord?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

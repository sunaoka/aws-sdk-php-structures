<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateDomainAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AMPLIFY_MANAGED'|'CUSTOM' $type
 * @property string $customCertificateArn
 */
class CertificateSettings extends Shape
{
    /**
     * @param array{
     *     type: 'AMPLIFY_MANAGED'|'CUSTOM',
     *     customCertificateArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

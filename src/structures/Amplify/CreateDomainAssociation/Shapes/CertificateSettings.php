<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateDomainAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AMPLIFY_MANAGED'|'CUSTOM' $type
 * @property string|null $customCertificateArn
 */
class CertificateSettings extends Shape
{
    /**
     * @param array{
     *     type: 'AMPLIFY_MANAGED'|'CUSTOM',
     *     customCertificateArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

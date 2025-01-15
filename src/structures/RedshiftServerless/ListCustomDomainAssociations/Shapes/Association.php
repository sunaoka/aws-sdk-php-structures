<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListCustomDomainAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $customDomainCertificateArn
 * @property \Aws\Api\DateTimeResult|null $customDomainCertificateExpiryTime
 * @property string|null $customDomainName
 * @property string|null $workgroupName
 */
class Association extends Shape
{
    /**
     * @param array{
     *     customDomainCertificateArn?: string|null,
     *     customDomainCertificateExpiryTime?: \Aws\Api\DateTimeResult|null,
     *     customDomainName?: string|null,
     *     workgroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListCustomDomainAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $customDomainCertificateArn
 * @property \Aws\Api\DateTimeResult $customDomainCertificateExpiryTime
 * @property string $customDomainName
 * @property string $workgroupName
 */
class Association extends Shape
{
    /**
     * @param array{
     *     customDomainCertificateArn?: string,
     *     customDomainCertificateExpiryTime?: \Aws\Api\DateTimeResult,
     *     customDomainName?: string,
     *     workgroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

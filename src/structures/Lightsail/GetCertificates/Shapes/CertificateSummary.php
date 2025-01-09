<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 * @property string $certificateName
 * @property string $domainName
 * @property Certificate $certificateDetail
 * @property list<Tag> $tags
 */
class CertificateSummary extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string,
     *     certificateName?: string,
     *     domainName?: string,
     *     certificateDetail?: Certificate,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

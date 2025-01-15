<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $certificateArn
 * @property string|null $certificateName
 * @property string|null $domainName
 * @property Certificate|null $certificateDetail
 * @property list<Tag>|null $tags
 */
class CertificateSummary extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string|null,
     *     certificateName?: string|null,
     *     domainName?: string|null,
     *     certificateDetail?: Certificate|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

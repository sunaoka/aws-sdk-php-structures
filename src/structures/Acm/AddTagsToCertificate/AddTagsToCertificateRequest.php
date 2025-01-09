<?php

namespace Sunaoka\Aws\Structures\Acm\AddTagsToCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property list<Shapes\Tag> $Tags
 */
class AddTagsToCertificateRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Iam\TagServerCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerCertificateName
 * @property list<Shapes\Tag> $Tags
 */
class TagServerCertificateRequest extends Request
{
    /**
     * @param array{
     *     ServerCertificateName: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

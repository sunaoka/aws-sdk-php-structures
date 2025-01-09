<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateName
 * @property string $domainName
 * @property list<string> $subjectAlternativeNames
 * @property list<Shapes\Tag> $tags
 */
class CreateCertificateRequest extends Request
{
    /**
     * @param array{
     *     certificateName: string,
     *     domainName: string,
     *     subjectAlternativeNames?: list<string>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

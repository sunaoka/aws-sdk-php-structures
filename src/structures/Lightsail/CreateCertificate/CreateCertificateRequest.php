<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateName
 * @property string $domainName
 * @property list<string>|null $subjectAlternativeNames
 * @property list<Shapes\Tag>|null $tags
 */
class CreateCertificateRequest extends Request
{
    /**
     * @param array{
     *     certificateName: string,
     *     domainName: string,
     *     subjectAlternativeNames?: list<string>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

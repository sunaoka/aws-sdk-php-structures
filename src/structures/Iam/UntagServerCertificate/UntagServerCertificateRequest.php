<?php

namespace Sunaoka\Aws\Structures\Iam\UntagServerCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerCertificateName
 * @property list<string> $TagKeys
 */
class UntagServerCertificateRequest extends Request
{
    /**
     * @param array{
     *     ServerCertificateName: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 * @property bool|null $forceDelete
 */
class DeleteCertificateRequest extends Request
{
    /**
     * @param array{
     *     certificateId: string,
     *     forceDelete?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

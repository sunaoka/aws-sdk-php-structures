<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceFileUploadUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fileName
 */
class GetEvidenceFileUploadUrlRequest extends Request
{
    /**
     * @param array{fileName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

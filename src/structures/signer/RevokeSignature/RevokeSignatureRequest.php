<?php

namespace Sunaoka\Aws\Structures\signer\RevokeSignature;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $jobOwner
 * @property string $reason
 */
class RevokeSignatureRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     jobOwner?: string,
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

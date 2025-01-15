<?php

namespace Sunaoka\Aws\Structures\signer\RevokeSignature;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string|null $jobOwner
 * @property string $reason
 */
class RevokeSignatureRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     jobOwner?: string|null,
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

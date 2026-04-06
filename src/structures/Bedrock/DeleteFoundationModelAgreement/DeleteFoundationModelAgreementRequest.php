<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteFoundationModelAgreement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 */
class DeleteFoundationModelAgreementRequest extends Request
{
    /**
     * @param array{modelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

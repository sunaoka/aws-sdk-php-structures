<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateFoundationModelAgreement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $offerToken
 * @property string $modelId
 */
class CreateFoundationModelAgreementRequest extends Request
{
    /**
     * @param array{
     *     offerToken: string,
     *     modelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutUseCaseForModelAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $formData
 */
class PutUseCaseForModelAccessRequest extends Request
{
    /**
     * @param array{formData: string|resource|\Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

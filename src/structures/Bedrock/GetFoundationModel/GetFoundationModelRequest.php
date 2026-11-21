<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetFoundationModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelIdentifier
 * @property string|null $projectIdentifier
 */
class GetFoundationModelRequest extends Request
{
    /**
     * @param array{
     *     modelIdentifier: string,
     *     projectIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

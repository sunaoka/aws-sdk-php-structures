<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\DeleteMicrovmImageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageIdentifier
 * @property string $imageVersion
 */
class DeleteMicrovmImageVersionRequest extends Request
{
    /**
     * @param array{
     *     imageIdentifier: string,
     *     imageVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

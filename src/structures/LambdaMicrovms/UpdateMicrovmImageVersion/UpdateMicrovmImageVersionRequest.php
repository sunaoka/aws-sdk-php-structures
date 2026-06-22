<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\UpdateMicrovmImageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageIdentifier
 * @property string $imageVersion
 * @property 'ACTIVE'|'INACTIVE' $status
 */
class UpdateMicrovmImageVersionRequest extends Request
{
    /**
     * @param array{
     *     imageIdentifier: string,
     *     imageVersion: string,
     *     status: 'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

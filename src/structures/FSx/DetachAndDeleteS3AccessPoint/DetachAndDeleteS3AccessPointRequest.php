<?php

namespace Sunaoka\Aws\Structures\FSx\DetachAndDeleteS3AccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $Name
 */
class DetachAndDeleteS3AccessPointRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

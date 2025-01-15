<?php

namespace Sunaoka\Aws\Structures\Omics\CreateShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $principalSubscriber
 * @property string|null $shareName
 */
class CreateShareRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     principalSubscriber: string,
     *     shareName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

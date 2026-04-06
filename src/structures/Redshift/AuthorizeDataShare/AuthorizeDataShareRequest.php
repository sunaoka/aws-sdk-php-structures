<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeDataShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataShareArn
 * @property string $ConsumerIdentifier
 */
class AuthorizeDataShareRequest extends Request
{
    /**
     * @param array{
     *     DataShareArn: string,
     *     ConsumerIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

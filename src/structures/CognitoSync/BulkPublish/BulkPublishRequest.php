<?php

namespace Sunaoka\Aws\Structures\CognitoSync\BulkPublish;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 */
class BulkPublishRequest extends Request
{
    /**
     * @param array{IdentityPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Emr\GetPersistentAppUIPresignedURL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PersistentAppUIId
 * @property 'SHS'|'TEZ'|'YTS'|null $PersistentAppUIType
 * @property string|null $ApplicationId
 * @property bool|null $AuthProxyCall
 * @property string|null $ExecutionRoleArn
 */
class GetPersistentAppUIPresignedURLRequest extends Request
{
    /**
     * @param array{
     *     PersistentAppUIId: string,
     *     PersistentAppUIType?: 'SHS'|'TEZ'|'YTS'|null,
     *     ApplicationId?: string|null,
     *     AuthProxyCall?: bool|null,
     *     ExecutionRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
